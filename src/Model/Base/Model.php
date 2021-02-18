<?php

namespace Geodis\Model\Base;

/**
 * Author: Nils méchin <nils@zangra.com>
 * Author: Maxime Lambot <maxime@lambot.com>.
 */
abstract class Model
{
    public function toJson($skipNullValues = true)
    {
        if($skipNullValues == true){
            return json_encode($this->removeEmptyValues());
        }
        else{
            return json_encode($this);
        }
    }

    /**
     * Remove any elements where the value is empty
     * @param  object $this the object to walk
     * @return array
     */
    public function removeEmptyValues(){
        $data = (array)$this;
        foreach ($data as $key => &$value) {
            if (is_array($value) || is_object($value)) {
                $value = $this->removeEmptyValuesFromArray((array)$value);
            }
            if (empty($value)) {
                unset($data[$key]);
            }
        }
        return $data;
    }

    /**
     * Remove any elements where the value is empty
     * @param  array $data the array to walk
     * @return array
     */
    public function removeEmptyValuesFromArray($data){
        foreach ($data as $key => &$value) {
            if (is_array($value) || is_object($value)) {
                $value = $this->removeEmptyValuesFromArray((array)$value);
            }
            if (empty($value)) {
                unset($data[$key]);
            }
        }
        return $data;
    }
}
