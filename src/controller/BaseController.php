<?php

namespace src\controller;

abstract class BaseController {

    const STATUS_OK = 1;
    const STATUS_ERROR = 0;

    /**
     * @param callable $callable
     * @return string
     */
    protected function callWithJsonResponse(callable $callable) {
        try {
            $result = $callable();
        } catch (\Exception $e) {
            return $this->jsonFailResponse($e->getMessage());
        }

        return $this->jsonSuccessResponse($result);
    }

    /**
     * @param array $data
     * @return string
     */
    protected function jsonSuccessResponse(array $data = [])
    {
        return $this->_jsonResponse(self::STATUS_OK, $data);
    }

    /**
     * @param string $error
     * @return string
     */
    protected function jsonFailResponse($error)
    {
        return $this->_jsonResponse(self::STATUS_ERROR, [], $error);
    }


    /**
     * @param string $status
     * @param array $data
     * @param string $error
     * @return string
     */
    private function _jsonResponse($status, array $data, $error = '')
    {
        return json_encode([
            'status' => $status,
            'data'   => $data,
            'error'  => $error,
        ]);
    }
}