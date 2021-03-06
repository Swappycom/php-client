<?php
/**
 * Product
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swappy
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Swappy REST API
 *
 * This is Swappy's REST API. See below for all available endpoints. This is an <strong>alpha version</strong> and might still be subject to change
 *
 * OpenAPI spec version: 0.1.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swappy\Api\Model;

use \ArrayAccess;

/**
 * Product Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swappy
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Product implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Product';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id' => 'int',
        'title' => 'string',
        'quantity' => 'int',
        'images' => '\Swappy\Api\Model\ProductImage[]',
        'category' => '\Swappy\Api\Model\Category',
        'address' => '\Swappy\Api\Model\Address',
        'description' => 'string',
        'auction' => 'bool',
        'date_start' => '\DateTime',
        'live' => '\Swappy\Api\Model\Live',
        'price' => 'double',
        'reserve_price' => 'double',
        'buynow_price' => 'double',
        'lot_number' => 'string',
        'delivery' => '\Swappy\Api\Model\Delivery[]',
        'payment' => '\Swappy\Api\Model\Payment[]',
        'auto_renew' => 'bool',
        'taxes' => '\Swappy\Api\Model\ProductTaxes',
        'estimate' => '\Swappy\Api\Model\ProductEstimate',
        'offer' => '\Swappy\Api\Model\ProductOffer',
        'duration' => 'int'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'id' => 'id',
        'title' => 'title',
        'quantity' => 'quantity',
        'images' => 'images',
        'category' => 'category',
        'address' => 'address',
        'description' => 'description',
        'auction' => 'auction',
        'date_start' => 'date_start',
        'live' => 'live',
        'price' => 'price',
        'reserve_price' => 'reserve_price',
        'buynow_price' => 'buynow_price',
        'lot_number' => 'lot_number',
        'delivery' => 'delivery',
        'payment' => 'payment',
        'auto_renew' => 'auto_renew',
        'taxes' => 'taxes',
        'estimate' => 'estimate',
        'offer' => 'offer',
        'duration' => 'duration'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'id' => 'setId',
        'title' => 'setTitle',
        'quantity' => 'setQuantity',
        'images' => 'setImages',
        'category' => 'setCategory',
        'address' => 'setAddress',
        'description' => 'setDescription',
        'auction' => 'setAuction',
        'date_start' => 'setDateStart',
        'live' => 'setLive',
        'price' => 'setPrice',
        'reserve_price' => 'setReservePrice',
        'buynow_price' => 'setBuynowPrice',
        'lot_number' => 'setLotNumber',
        'delivery' => 'setDelivery',
        'payment' => 'setPayment',
        'auto_renew' => 'setAutoRenew',
        'taxes' => 'setTaxes',
        'estimate' => 'setEstimate',
        'offer' => 'setOffer',
        'duration' => 'setDuration'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'id' => 'getId',
        'title' => 'getTitle',
        'quantity' => 'getQuantity',
        'images' => 'getImages',
        'category' => 'getCategory',
        'address' => 'getAddress',
        'description' => 'getDescription',
        'auction' => 'getAuction',
        'date_start' => 'getDateStart',
        'live' => 'getLive',
        'price' => 'getPrice',
        'reserve_price' => 'getReservePrice',
        'buynow_price' => 'getBuynowPrice',
        'lot_number' => 'getLotNumber',
        'delivery' => 'getDelivery',
        'payment' => 'getPayment',
        'auto_renew' => 'getAutoRenew',
        'taxes' => 'getTaxes',
        'estimate' => 'getEstimate',
        'offer' => 'getOffer',
        'duration' => 'getDuration'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['images'] = isset($data['images']) ? $data['images'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['auction'] = isset($data['auction']) ? $data['auction'] : null;
        $this->container['date_start'] = isset($data['date_start']) ? $data['date_start'] : null;
        $this->container['live'] = isset($data['live']) ? $data['live'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['reserve_price'] = isset($data['reserve_price']) ? $data['reserve_price'] : null;
        $this->container['buynow_price'] = isset($data['buynow_price']) ? $data['buynow_price'] : null;
        $this->container['lot_number'] = isset($data['lot_number']) ? $data['lot_number'] : null;
        $this->container['delivery'] = isset($data['delivery']) ? $data['delivery'] : null;
        $this->container['payment'] = isset($data['payment']) ? $data['payment'] : null;
        $this->container['auto_renew'] = isset($data['auto_renew']) ? $data['auto_renew'] : null;
        $this->container['taxes'] = isset($data['taxes']) ? $data['taxes'] : null;
        $this->container['estimate'] = isset($data['estimate']) ? $data['estimate'] : null;
        $this->container['offer'] = isset($data['offer']) ? $data['offer'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['title'] === null) {
            $invalid_properties[] = "'title' can't be null";
        }
        if ($this->container['category'] === null) {
            $invalid_properties[] = "'category' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalid_properties[] = "'description' can't be null";
        }
        if ($this->container['auction'] === null) {
            $invalid_properties[] = "'auction' can't be null";
        }
        if ($this->container['price'] === null) {
            $invalid_properties[] = "'price' can't be null";
        }
        if ($this->container['delivery'] === null) {
            $invalid_properties[] = "'delivery' can't be null";
        }
        if ($this->container['payment'] === null) {
            $invalid_properties[] = "'payment' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['title'] === null) {
            return false;
        }
        if ($this->container['category'] === null) {
            return false;
        }
        if ($this->container['description'] === null) {
            return false;
        }
        if ($this->container['auction'] === null) {
            return false;
        }
        if ($this->container['price'] === null) {
            return false;
        }
        if ($this->container['delivery'] === null) {
            return false;
        }
        if ($this->container['payment'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets quantity
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     * @param int $quantity
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets images
     * @return \Swappy\Api\Model\ProductImage[]
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     * @param \Swappy\Api\Model\ProductImage[] $images
     * @return $this
     */
    public function setImages($images)
    {
        $this->container['images'] = $images;

        return $this;
    }

    /**
     * Gets category
     * @return \Swappy\Api\Model\Category
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     * @param \Swappy\Api\Model\Category $category
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets address
     * @return \Swappy\Api\Model\Address
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     * @param \Swappy\Api\Model\Address $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets auction
     * @return bool
     */
    public function getAuction()
    {
        return $this->container['auction'];
    }

    /**
     * Sets auction
     * @param bool $auction
     * @return $this
     */
    public function setAuction($auction)
    {
        $this->container['auction'] = $auction;

        return $this;
    }

    /**
     * Gets date_start
     * @return \DateTime
     */
    public function getDateStart()
    {
        return $this->container['date_start'];
    }

    /**
     * Sets date_start
     * @param \DateTime $date_start ISO-8601 date or Duration, if it is a duration, it will be relative to process time
     * @return $this
     */
    public function setDateStart($date_start)
    {
        $this->container['date_start'] = $date_start;

        return $this;
    }

    /**
     * Gets live
     * @return \Swappy\Api\Model\Live
     */
    public function getLive()
    {
        return $this->container['live'];
    }

    /**
     * Sets live
     * @param \Swappy\Api\Model\Live $live
     * @return $this
     */
    public function setLive($live)
    {
        $this->container['live'] = $live;

        return $this;
    }

    /**
     * Gets price
     * @return double
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     * @param double $price
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets reserve_price
     * @return double
     */
    public function getReservePrice()
    {
        return $this->container['reserve_price'];
    }

    /**
     * Sets reserve_price
     * @param double $reserve_price
     * @return $this
     */
    public function setReservePrice($reserve_price)
    {
        $this->container['reserve_price'] = $reserve_price;

        return $this;
    }

    /**
     * Gets buynow_price
     * @return double
     */
    public function getBuynowPrice()
    {
        return $this->container['buynow_price'];
    }

    /**
     * Sets buynow_price
     * @param double $buynow_price
     * @return $this
     */
    public function setBuynowPrice($buynow_price)
    {
        $this->container['buynow_price'] = $buynow_price;

        return $this;
    }

    /**
     * Gets lot_number
     * @return string
     */
    public function getLotNumber()
    {
        return $this->container['lot_number'];
    }

    /**
     * Sets lot_number
     * @param string $lot_number
     * @return $this
     */
    public function setLotNumber($lot_number)
    {
        $this->container['lot_number'] = $lot_number;

        return $this;
    }

    /**
     * Gets delivery
     * @return \Swappy\Api\Model\Delivery[]
     */
    public function getDelivery()
    {
        return $this->container['delivery'];
    }

    /**
     * Sets delivery
     * @param \Swappy\Api\Model\Delivery[] $delivery
     * @return $this
     */
    public function setDelivery($delivery)
    {
        $this->container['delivery'] = $delivery;

        return $this;
    }

    /**
     * Gets payment
     * @return \Swappy\Api\Model\Payment[]
     */
    public function getPayment()
    {
        return $this->container['payment'];
    }

    /**
     * Sets payment
     * @param \Swappy\Api\Model\Payment[] $payment
     * @return $this
     */
    public function setPayment($payment)
    {
        $this->container['payment'] = $payment;

        return $this;
    }

    /**
     * Gets auto_renew
     * @return bool
     */
    public function getAutoRenew()
    {
        return $this->container['auto_renew'];
    }

    /**
     * Sets auto_renew
     * @param bool $auto_renew
     * @return $this
     */
    public function setAutoRenew($auto_renew)
    {
        $this->container['auto_renew'] = $auto_renew;

        return $this;
    }

    /**
     * Gets taxes
     * @return \Swappy\Api\Model\ProductTaxes
     */
    public function getTaxes()
    {
        return $this->container['taxes'];
    }

    /**
     * Sets taxes
     * @param \Swappy\Api\Model\ProductTaxes $taxes
     * @return $this
     */
    public function setTaxes($taxes)
    {
        $this->container['taxes'] = $taxes;

        return $this;
    }

    /**
     * Gets estimate
     * @return \Swappy\Api\Model\ProductEstimate
     */
    public function getEstimate()
    {
        return $this->container['estimate'];
    }

    /**
     * Sets estimate
     * @param \Swappy\Api\Model\ProductEstimate $estimate
     * @return $this
     */
    public function setEstimate($estimate)
    {
        $this->container['estimate'] = $estimate;

        return $this;
    }

    /**
     * Gets offer
     * @return \Swappy\Api\Model\ProductOffer
     */
    public function getOffer()
    {
        return $this->container['offer'];
    }

    /**
     * Sets offer
     * @param \Swappy\Api\Model\ProductOffer $offer
     * @return $this
     */
    public function setOffer($offer)
    {
        $this->container['offer'] = $offer;

        return $this;
    }

    /**
     * Gets duration
     * @return int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     * @param int $duration
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swappy\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swappy\ObjectSerializer::sanitizeForSerialization($this));
    }
}


