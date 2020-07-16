<?php
/**
 * A class that handles Ajax calls
 *
 * @author Lindsay Marshall <lindsay.marshall@ncl.ac.uk>
 * @copyright 2017-2019 Newcastle University
 */
    namespace Support;

/**
 * Handles Ajax Calls.
 */
    final class Ajax extends \Framework\Ajax
    {
/**
 * Add functions that implement your AJAX operations here and register them
 * in the handle method below.
 */
/*
        public function yourop(Context $context)
        {
            // your code
        }
 */
/**
 * If you are using the predefined features of the framework then you may need to
 * add some appropriate vaues into these arrays.
 *
 * The key to both the array fields is the name of the bean type you are working with.
 */
/**
 * @var array<array>   Values controlling whether or not pagination calls are allowed
 */
        private static $allowPaging = [
            // 'bean' => [TRUE, [['ContextName', 'RoleName']]] // TRUE if login needed, then an array of roles required in form [['context name', 'role name']...] (can be empty)
        ];
/**
 * @var array<array>   Values controlling whether or not search hint calls are allowed
 */
        private static $allowHints = [
            // 'bean' => ['field', TRUE, [['ContextName', 'RoleName']]] // TRUE if login needed, then an array of roles required in form [['context name', 'role name']...] (can be empty)
        ];
/**
 * @var array<array>   Values controlling whether or not calls on the bean operation are allowed
 */
        private static $allowBean = [
            // [[['ContextName', 'RoleName']], [ 'bean' => [...fields...], ...]] // an array of roles required in form [['context name', 'role name']...] (can be empty)
        ];
/**
 * @var array<array>   Values controlling whether or not calls on the toggle operation are allowed
 */
        private static $allowToggle = [
            // [[['ContextName', 'RoleName']], [ 'bean' => [...fields...], ...]] // an array of roles required in form [['context name', 'role name']...] (can be empty)
        ];
/**
 * @var array<array>   Values controlling whether or not calls on the table operation are allowed
 */
        private static $allowTable = [
            // [[['ContextName', 'RoleName']], [ 'bean', ....]] // an array of roles required in form [['context name', 'role name']...] (can be empty)
        ];
/**
 * @var array<array>   Values controlling whether or not calls on the table operation are allowed
 */
        private static $allowTSearch = [
            // [[['ContextName', 'RoleName']], [ 'bean' => [...fields...], ...]] // an array of roles required in form [['context name', 'role name']...] (can be empty)
        ];
/**
 * @var array<array<string>>   Values controlling whether or not calls on the uniquenl operation are allowed
 */
        private static $allowUniquenl = [
            // ['bean' => [...fields...], ...] // an array of beans and fields that can be accessed
        ];
/**
 * @var array<string>   Values controlling whether or not bean operations are logged for certain beans
 */
        private static $audit = [
            // 'bean'..... A list of bean names
        ];
/**
 * Handle AJAX operations
 *
 * @param Context   $context    The context object for the site
 *
 * @return void
 */
        public function handle(Context $context) : void
        {
            parent::__construct();
/* ***** Your code goes here  ***** */
            //$this->operation(['yourop', ...], [TRUE, [['ContextName', 'RoleName'],...]]);
            // TRUE if login needed, then an array of roles required in form [['context name', 'role name']...] (can be empty)
/* ****** do not change below here ***** */
            $this->access->pageOrHint(self::$allowPaging, self::$allowHints);
            $this->access->beanAccess(self::$allowBean, self::$allowToggle, self::$allowTable, self::$audit, self::$allowTSearch, self::$allowUniquenl);
            parent::handle($context);
        }
    }
?>