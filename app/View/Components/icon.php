<?php

namespace App\View\Components;

use Illuminate\View\Component;

class icon extends Component
{
    /**
     * Type of button
     *
     * @var string
     */
    public $type;

    /**
     * Size of button
     *
     * @var string
     */
    public $size;

    /**
     * Returned icon
     *
     * @var string
     */
    public $icon;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type, int $size = null)
    {
        $this->type = $type;
        $this->size = $size;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $this->setIcon();

        return view('components.icon');
    }

    /**
     * @return string
     */
    private function setIcon()
    {
        /**
         * List of icons
         */
        $icon = match ($this->type) {
            'logout'        => '<i class="bi bi-box-arrow-right"></i>',
            'print'         => '<i class="bi bi-printer-fill"></i>',
            'delete'        => '<i class="bi bi-trash-fill"></i>',
            'edit'          => '<i class="bi bi-pencil-square"></i>',
            'copy'          => '<i class="bi bi-files"></i>',
            'search'        => '<i class="bi bi-search"></i>',
            'showDocument'  => '<i class="bi bi-file"></i>',
            'upload'        => '<i class="bi bi-upload"></i>',
            'import'        => '<i class="bi bi-file-arrow-up-fill"></i>',
            'unfolded'      => '<i class="bi bi-caret-down-fill"></i>',
            'folded'        => '<i class="bi bi-caret-right-fill"></i>',
            'send'          => '<i class="bi bi-send-fill"></i>',
            'save'          => '<i class="bi bi-save-fill"></i>',
            'order'         => '<i class="bi bi-basket-fill"></i>',
            'bill'          => '<i class="bi bi-wallet2"></i>',
            'euro'          => '<i class="bi bi-currency-euro"></i>',
            'folderClosed'  => '<i class="bi bi-folder"></i>',
            'folderOpen'    => '<i class="bi bi-folder2-open"></i>',
            'circleUp'      => '<i class="bi bi-arrow-up-circle-fill"></i>',
            'circleDown'    => '<i class="bi bi-arrow-down-circle-fill"></i>',
            'info'          => '<i class="bi bi-info-circle-fill"></i>',
            'warning'       => '<i class="bi bi-exclamation-circle-fill"></i>',
            'back'          => '<i class="bi bi-chevron-left"></i>',
            'forward'       => '<i class="bi bi-chevron-right"></i>',
            'left'          => '<i class="bi bi-arrow-left-short"></i>',
            'up'            => '<i class="bi bi-arrow-up-short"></i>',
            'right'         => '<i class="bi bi-arrow-right-short"></i>',
            'down'          => '<i class="bi bi-arrow-down-short"></i>',
            'plus'          => '<i class="bi bi-plus"></i>',
            'minus'         => '<i class="bi bi-dash"></i>',
            'currency'      => '<i class="bi bi-cash"></i>',
            'supplier'      => '<i class="bi bi-truck"></i>',
            'agree'         => '<i class="bi bi-check-circle-fill"></i>',
            'cancel'        => '<i class="bi bi-x-circle-fill"></i>',
            'design'        => '<i class="bi bi-eye-fill"></i>',
            'bankAccount'   => '<i class="bi bi-bank2"></i>',
            'cookie'        => '<i class="bi bi-circle-fill"></i>',
            'check'         => '<i class="bi bi-check"></i>',
            'cross'         => '<i class="bi bi-x"></i>',
            'clear'         => '<i class="bi bi-eraser-fill"></i>',
            'login'         => '<i class="bi bi-door-open-fill"></i>',
            'register'      => '<i class="bi bi-person-plus-fill"></i>',
        };

        if ($this->size != null) {
            $icon = '<span style="font-size: ' . $this->size . 'px;">' . $icon . '</span>';
        }

        $this->icon = $icon;

    }
}
