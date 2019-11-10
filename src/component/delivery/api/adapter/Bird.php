<?php

namespace src\component\delivery\api\adapter;

use src\component\storage\entity;

class Bird extends BaseAdapter implements DeliveryService {

    const NAME = 'BIRD';
    const URL = 'https://bird-delivery.com/';

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
    private function _getInfo($sender, $recipient, array $elements) {
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

        return [
            'amount' => $decodedResponse['amount'],
            'days'   => $decodedResponse['days'],
        ];
    }

    /**
     * @param entity\Item[] $items
     * @return array
     */
    private function _prepareList(array $items) {
        $result = [];

        foreach ($items as $item) {
            $result[] = [
                'weight' => $item->weigth(),
                'w_d_h'  => "{$item->width()}x{$item->depth()}x{$item->height()}",
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

        if (array_key_exists('days', $data)) {
            throw new \AdapterException('date doesnt exist');
        }
        /** Some checks */
    }
}