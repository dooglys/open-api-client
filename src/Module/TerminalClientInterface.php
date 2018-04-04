<?php

namespace Dooglys\Api\Module;

/**
 * Interface TerminalClientInterface
 * @package Dooglys\Api\Module
 */
interface TerminalClientInterface {
    /**
     * API метод /v1/terminal-menu/menu/view
     * @param $id
     *
     * @return mixed
     */
    public function terminalMenuMenuView ($id);

    /**
     * API метод /v1/terminal-menu/menu/kit
     * @param array $options
     *
     * @return mixed
     */
    public function terminalMenuMenuKit ($id);

    /**
     * API метод /v1/terminal-menu/menu/kit-products
     * @param $id
     *
     * @return mixed
     */
    public function terminalMenuMenuKitProducts ($id);

    /**
     * API метод /v1/terminal-menu/menu/modifier
     * @param $id
     *
     * @return mixed
     */
    public function terminalMenuMenuModifier ($id);
}