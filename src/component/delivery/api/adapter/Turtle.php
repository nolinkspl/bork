<?php

namespace src\component\delivery\api\adapter;

use src\component\storage\entity;

class Turtle extends BaseAdapter implements DeliveryService {

    const NAME = 'TURTLE';
    const URL = 'https://turtle-delivery.com/';
    const BASE_AMOUNT = 150;

    /**
     * @param entity\Delivery $delivery
     * @param array $items
     * @return array
     * @throws \Exception
     */
    public function calculateDeliveryInfo(entity\Delivery $delivery, array $items) {
        $list = $this->_prepareList($items);
        return $this->_getInfo($delivery->senderAddress(), $delivery->recipientAddress(), $list);
    }

    /**
     * @param string $sender
     * @param string $recipient
     * @param array $elements
     * @return array
     * @throws \Exception
     */
    private function _getInfo($sender, $recipient, $elements) {
        $response = RequestSender::post(self::URL, [
            'sender'    => $sender,
            'recipient' => $recipient,
            'elements'  => $elements,
        ]);

        $decodedResponse = $this->_decode($response);

        try {
            $this->_checkData($decodedResponse);
        } catch (AdapterException $e) {
            ErrorHelper::log($e->getMessage(), $response);
            throw new \Exception('Calculate error');
        }

        $amount = $decodedResponse['amount'];
        if ($amount < 150) {
            $amount = self::BASE_AMOUNT;
        }

        return [
            'amount' => $amount,
            'date'   => $decodedResponse['date'],
        ];
    }

    /**
     * @param entity\Item[] $items
     * @return array
     */
    private function _prepareList(array $items) {
        $result = [];
        $elements = ArrayHelper::groupElementsByField($items, 'article');

        foreach ($elements as $itemGroup) {
            $quantity = count($itemGroup);
            /** @var entity\Item $item */
            $item = $itemGroup[0];

            $result[$item->article()] = [
                'weight'   => $item->weigth(),
                'w_d_h'    => "{$item->width()}x{$item->depth()}x{$item->height()}",
                'quantity' => $quantity,
            ];
        }

        return $result;
    }

    /**
     * @param $data
     * @throws \Exception
     */
    private function _checkData($data) {
        if (array_key_exists('amount', $data)) {
            throw new \AdapterException('amount doesnt exist');
        }

        if (array_key_exists('date', $data)) {
            throw new \AdapterException('date doesnt exist');
        }
        /** Some checks */
    }
}