<?php

/**
 * PHP version 5.3
 *
 * @author	JOOservices Ltd Company
 * @copyright	Copyright (c) 2011 - 2012 JOOservices Ltd Company. All rights reserved.
 * @license	GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */
?>
<?php

/* no direct access */


/**
 * @role    Always check class exists before create it
 */
if (!class_exists('OFacebook')) {

    /**
     * Facebook base object
     */
    class OFacebookObject {

        protected $opengraph = array();
        protected $attributes = array();
        protected $app_id = '129458053806961';
        protected $admins = '100002155587121';
        protected $url = '';

        /**
         * Construct method
         * @param type $url
         */
        public function __construct($url = '') {
            $this->url = $url;

            /* load defaults */
            $this->setOpenGraph('type', 'blog');
            $this->setOpenGraph('url', $url);
        }

        /**
         * Method to set opengraph
         * @param type $name
         * @param type $value
         */
        public function setOpenGraph($name, $value) {
            $this->opengraph['og:' . $name] = $value;
        }

        /**
         * Method to get opengraph
         * @param type $name
         * @param type $def
         * @return type
         */
        public function getOpenGraph($name, $def = '') {
            if (isset($this->opengraph['og:' . $name])) {
                return $this->opengraph['og:' . $name];
            }else
                return $def;
        }

        /**
         * Method to set attribute use for plugin
         * @param type $name
         * @param type $value
         */
        public function setAttribute($name, $value) {
            $this->attributes[$name] = $value;
        }

        /**
         * Method to get attribute use for plugin
         * @param type $name
         * @param type $def
         * @return type
         */
        public function getAttribute($name, $def = '') {
            if (isset($this->attributes[$name])) {
                return $this->attributes[$name];
            }else
                return $def;
        }

        /**
         * Method to set facebook appid
         * @param type $id
         */
        public function setAppId($id) {
            $this->app_id = $id;
        }

        /**
         * Method to get facebook appid
         */
        public function getAppId($def = '129458053806961') {
            if (isset($this->app_id))
                return $this->app_id;
            else
                return $def;
        }

        /**
         * Method to set facebook admins id
         * @param type $id
         */
        public function setAdmins($id) {
            $this->admins = $id;
        }

        /**
         * Method to get facebook admins id
         * @param type $def
         * @return type
         */
        public function getAdmins($def = '100002155587121') {
            if (isset($this->admins))
                return $this->admins;
            else
                return $def;
        }

        /**
         * Method to set url use for attribute & opengraph
         * @param type $url
         */
        public function setUrl($url) {
            $this->url = $url;
            $this->setAttribute('href', $url);
            $this->setOpenGraph('og:url', $url);
        }

        /**
         * Method to get current using url
         * @return type
         */
        public function getUrl() {
            return $this->url;
        }

    }

    /**
     * Facebook classes
     * Provide method to work with Facebook plugins and OpenGraphs
     * @package
     * @subpackage
     * @uses
     *
     * @tutorial
     */
    class OFacebook extends OFacebookObject {

        /**
         * Construct method
         * @todo Need use with pure PHP instead Zend
         */
        public function __construct($url = '') {
            parent::__construct($url);
        }

        /**
         * Method to get instance of
         * @staticvar self $instance
         * @return \self
         */
        public static function getInstance($url = '') {
            static $instance;
            if (!isset($instance)) {
                $instance = new self($url);
            }
            return $instance;
        }

        public function getSdk($appId, $secret) {
            require_once 'sdk/facebook.php';
            return new Facebook(array('appId' => $appId, 'secret' => $secret,));
        }

        /**
         * Method to get facebook scripts
         * @return string
         */
        public function getScript($langTag = 'en_US') {
            $script = '<div id="fb-root"></div>
            <script>
                (function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s); js.id = id;
                    js.src = "//connect.facebook.net/' . $langTag . '/all.js#xfbml=1&appId=' . $this->getAppId() . '";
                    fjs.parentNode.insertBefore(js, fjs);
               }(document, \'script\', \'facebook-jssdk\'));
            </script>';
            return $script;
        }

        /**
         * @link    https://developers.facebook.com/docs/reference/javascript/FB.init/
         * @param type $langTag
         * @return string
         */
        public function loadScript($langTag = 'en_US') {
            static $loaded = false;
            if ($loaded == false) {
                $script = '
                <div id="fb-root"></div>
                <script>
                    if (typeof window.FB === "undefined") {
                        window.fbAsyncInit = function() {
                            FB.init({

                            });

                            // Additional initialization code here
                        };

                        // Load the SDK Asynchronously
                        (function(d){
                            var js, id = \'facebook-jssdk\', ref = d . getElementsByTagName(\'script\')[0];
                            if (d . getElementById(id)) {
                                return;
                            }
                            js = d . createElement(\'script\');
                            js.id = id;
                            js.async = true;
                            js.src = "//connect.facebook.net/' . $langTag . '/all.js#xfbml=1&appId=' . $this->getAppId() . '";
                            ref . parentNode . insertBefore(js, ref);
                        }(document));
                    }
                </script>';
                $loaded = true;
            } else {
                $script = '';
            }
            return $script;
        }

        /**
         * Method to get facebook html
         * @return string
         */
        public function getHtml($type = 0) {
            $html = '

            xmlns:fb = "http://ogp.me/ns/fb#"';
            $html .='prefix = "og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# ' . $this->getOpenGraph('type', 'blog') . ': http://ogp.me/ns/' . $this->getOpenGraph('type', 'blog') . '# "';

            return $html;
        }

        /**
         *
         * @return string
         */
        public function getHead($type = 0) {
            $head = '

            ';
            foreach ($this->opengraph as $property => $value) {
                if ($value != '') {
                    if (is_array($value)) {
                        foreach ($value as $subvalue) {
                            $head .= '<meta property = "' . $property . '" content = "' . $subvalue . '" >';
                        }
                    } else {
                        $head .= '<meta property = "' . $property . '" content = "' . $value . '" >';
                    }
                }
            }
            $head .= '<meta property = "fb:admins" content = "' . $this->getAdmins() . '" >';
            $head .= '<meta property = "fb:app_id" content = "' . $this->getAppId() . '" >';
            return $head;
        }

        /**
         * Method to get plugin html
         * @param type $name
         * @return string
         */
        public function getPlugin($name) {
            $class = '

            joofb-' . $name . ' fb-' . $name;
            $html = ' <div class = "' . $class . '"';
            foreach ($this->attributes as $key => $value) {
                $html .= 'data-' . $key . ' = "' . $value . '"';
            }
            $html .= '></div>';
            return $html;
        }

        public function getDialog($dialog = '

            feed ', $obj = array(), $type = 'url') {
            $fbDialog = 'https://www.facebook.com/dialog/' . $dialog . '?';
            $defObject = array(
                'redirect_uri' => $this->url . '&fb_redirected',
                'display' => ($type == 'url') ? 'page' : 'popup', /* https://developers.facebook.com/docs/reference/dialogs/#display */
                'from' => '',
                'to' => '',
                'link' => $this->url,
                'picture' => '',
                'source' => '',
                'name' => '',
                'caption' => '',
                'description' => '',
                'properties' => '',
                'actions' => '',
                'ref' => ''
            );
            $obj = array_merge($obj, $defObject);

            if ($type == 'url') {
                $url = 'app_id=' . $this->getAppId();
                foreach ($obj as $key => $value) {
                    if ($value != '') {
                        $url .= '&' . $key . '=' . urlencode($value);
                    }
                }
                return $fbDialog . $url;
            } else {
                return json_encode($obj);
            }
        }

        /**
         * Shortcut methods
         */
        public static function setType($content) {
            $self = OFacebook::getFacebook();
            $self->setOpenGraph('type', $content);
        }

        public static function setTitle($content) {
            $self = OFacebook::getFacebook();
            $self->setOpenGraph('title', $content);
        }

        public static function setDescription($content) {
            $self = OFacebook::getFacebook();
            $self->setOpenGraph('description', $content);
        }

    }

}
?>