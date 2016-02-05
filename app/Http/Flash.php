<?php

namespace App\Http;

class Flash {

    /** Create a flash message
     * @param $title
     * @param $message
     * @param $level
     * @param string $key
     * @return mixed
     */
    public function create($title, $message, $level, $key = 'flash_message')
    {
        return session()->flash($key, [
            'title'   => $title,
            'message' => $message,
            'level'   => $level
        ]);
    }

    /** Create an information flash message
     * @param $title
     * @param $message
     * @return void
     */
    public function info($title, $message)
    {
        return $this->create($title, $message, 'info');
    }

    /**
     * @param $title
     * @param $message
     * @return mixed
     */
    public function success($title, $message)
    {
        return $this->create($title, $message, 'success');
    }

    /**
     * @param $title
     * @param $message
     * @return mixed
     */
    public function error($title, $message)
    {
        return $this->create($title, $message, 'error');
    }

    /**
     * @param $title
     * @param $message
     * @param string $level
     * @return mixed
     */
    public function overlay($title, $message, $level = 'success')
    {
        return $this->create($title, $message, $level, 'flash_message_overlay');
    }

}