<?php
/**
 * Individual features of the Laravel template can be activated and deactivated here.
 * (true = activated, false = deactivated)
 */

return [

    /**
     * Logout button located in the top right-hand corner of the header, which can be used to log out of Shibboleth.
     */
    'logout_button' => true,

    /**
     * The button in the form of a flag, located in the top right-hand corner of the header, which can be used to switch between languages.
     */
    'translation_flag' => true,

    /**
     * Javascript for Bootstrap Tooltips is integrated into the main layout.
     */
    'tooltips' => true,

    /**
     * Required Livewire components (@livewireStyles and @livewireScripts) are integrated into the main layout.
     */
    'livewire' => true,

    /**
     * Activate new design (Bootstrap elements in interaction with the new design not yet fully tested)
     */
    'new_design' => false,

    /**
     * Design switch for users (only displayed if new_design = true)
     */
    'design_switch' => false,

    /**
     * Shows cookie hint text that must be confirmed once
     */
    'cookie_explanation' => false,

];
