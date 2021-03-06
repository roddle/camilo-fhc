<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @license see /license.txt
 * @author autogenerated
 */
class LpItem extends \CourseEntity
{
    /**
     * @return \Entity\Repository\LpItemRepository
     */
     public static function repository(){
        return \Entity\Repository\LpItemRepository::instance();
    }

    /**
     * @return \Entity\LpItem
     */
     public static function create(){
        return new self();
    }

    /**
     * @var integer $c_id
     */
    protected $c_id;

    /**
     * @var integer $id
     */
    protected $id;

    /**
     * @var integer $lp_id
     */
    protected $lp_id;

    /**
     * @var string $item_type
     */
    protected $item_type;

    /**
     * @var text $ref
     */
    protected $ref;

    /**
     * @var string $title
     */
    protected $title;

    /**
     * @var string $description
     */
    protected $description;

    /**
     * @var text $path
     */
    protected $path;

    /**
     * @var float $min_score
     */
    protected $min_score;

    /**
     * @var float $max_score
     */
    protected $max_score;

    /**
     * @var float $mastery_score
     */
    protected $mastery_score;

    /**
     * @var integer $parent_item_id
     */
    protected $parent_item_id;

    /**
     * @var integer $previous_item_id
     */
    protected $previous_item_id;

    /**
     * @var integer $next_item_id
     */
    protected $next_item_id;

    /**
     * @var integer $display_order
     */
    protected $display_order;

    /**
     * @var text $prerequisite
     */
    protected $prerequisite;

    /**
     * @var text $parameters
     */
    protected $parameters;

    /**
     * @var text $launch_data
     */
    protected $launch_data;

    /**
     * @var string $max_time_allowed
     */
    protected $max_time_allowed;

    /**
     * @var text $terms
     */
    protected $terms;

    /**
     * @var integer $search_did
     */
    protected $search_did;

    /**
     * @var string $audio
     */
    protected $audio;


    /**
     * Set c_id
     *
     * @param integer $value
     * @return LpItem
     */
    public function set_c_id($value)
    {
        $this->c_id = $value;
        return $this;
    }

    /**
     * Get c_id
     *
     * @return integer 
     */
    public function get_c_id()
    {
        return $this->c_id;
    }

    /**
     * Set id
     *
     * @param integer $value
     * @return LpItem
     */
    public function set_id($value)
    {
        $this->id = $value;
        return $this;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function get_id()
    {
        return $this->id;
    }

    /**
     * Set lp_id
     *
     * @param integer $value
     * @return LpItem
     */
    public function set_lp_id($value)
    {
        $this->lp_id = $value;
        return $this;
    }

    /**
     * Get lp_id
     *
     * @return integer 
     */
    public function get_lp_id()
    {
        return $this->lp_id;
    }

    /**
     * Set item_type
     *
     * @param string $value
     * @return LpItem
     */
    public function set_item_type($value)
    {
        $this->item_type = $value;
        return $this;
    }

    /**
     * Get item_type
     *
     * @return string 
     */
    public function get_item_type()
    {
        return $this->item_type;
    }

    /**
     * Set ref
     *
     * @param text $value
     * @return LpItem
     */
    public function set_ref($value)
    {
        $this->ref = $value;
        return $this;
    }

    /**
     * Get ref
     *
     * @return text 
     */
    public function get_ref()
    {
        return $this->ref;
    }

    /**
     * Set title
     *
     * @param string $value
     * @return LpItem
     */
    public function set_title($value)
    {
        $this->title = $value;
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function get_title()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $value
     * @return LpItem
     */
    public function set_description($value)
    {
        $this->description = $value;
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function get_description()
    {
        return $this->description;
    }

    /**
     * Set path
     *
     * @param text $value
     * @return LpItem
     */
    public function set_path($value)
    {
        $this->path = $value;
        return $this;
    }

    /**
     * Get path
     *
     * @return text 
     */
    public function get_path()
    {
        return $this->path;
    }

    /**
     * Set min_score
     *
     * @param float $value
     * @return LpItem
     */
    public function set_min_score($value)
    {
        $this->min_score = $value;
        return $this;
    }

    /**
     * Get min_score
     *
     * @return float 
     */
    public function get_min_score()
    {
        return $this->min_score;
    }

    /**
     * Set max_score
     *
     * @param float $value
     * @return LpItem
     */
    public function set_max_score($value)
    {
        $this->max_score = $value;
        return $this;
    }

    /**
     * Get max_score
     *
     * @return float 
     */
    public function get_max_score()
    {
        return $this->max_score;
    }

    /**
     * Set mastery_score
     *
     * @param float $value
     * @return LpItem
     */
    public function set_mastery_score($value)
    {
        $this->mastery_score = $value;
        return $this;
    }

    /**
     * Get mastery_score
     *
     * @return float 
     */
    public function get_mastery_score()
    {
        return $this->mastery_score;
    }

    /**
     * Set parent_item_id
     *
     * @param integer $value
     * @return LpItem
     */
    public function set_parent_item_id($value)
    {
        $this->parent_item_id = $value;
        return $this;
    }

    /**
     * Get parent_item_id
     *
     * @return integer 
     */
    public function get_parent_item_id()
    {
        return $this->parent_item_id;
    }

    /**
     * Set previous_item_id
     *
     * @param integer $value
     * @return LpItem
     */
    public function set_previous_item_id($value)
    {
        $this->previous_item_id = $value;
        return $this;
    }

    /**
     * Get previous_item_id
     *
     * @return integer 
     */
    public function get_previous_item_id()
    {
        return $this->previous_item_id;
    }

    /**
     * Set next_item_id
     *
     * @param integer $value
     * @return LpItem
     */
    public function set_next_item_id($value)
    {
        $this->next_item_id = $value;
        return $this;
    }

    /**
     * Get next_item_id
     *
     * @return integer 
     */
    public function get_next_item_id()
    {
        return $this->next_item_id;
    }

    /**
     * Set display_order
     *
     * @param integer $value
     * @return LpItem
     */
    public function set_display_order($value)
    {
        $this->display_order = $value;
        return $this;
    }

    /**
     * Get display_order
     *
     * @return integer 
     */
    public function get_display_order()
    {
        return $this->display_order;
    }

    /**
     * Set prerequisite
     *
     * @param text $value
     * @return LpItem
     */
    public function set_prerequisite($value)
    {
        $this->prerequisite = $value;
        return $this;
    }

    /**
     * Get prerequisite
     *
     * @return text 
     */
    public function get_prerequisite()
    {
        return $this->prerequisite;
    }

    /**
     * Set parameters
     *
     * @param text $value
     * @return LpItem
     */
    public function set_parameters($value)
    {
        $this->parameters = $value;
        return $this;
    }

    /**
     * Get parameters
     *
     * @return text 
     */
    public function get_parameters()
    {
        return $this->parameters;
    }

    /**
     * Set launch_data
     *
     * @param text $value
     * @return LpItem
     */
    public function set_launch_data($value)
    {
        $this->launch_data = $value;
        return $this;
    }

    /**
     * Get launch_data
     *
     * @return text 
     */
    public function get_launch_data()
    {
        return $this->launch_data;
    }

    /**
     * Set max_time_allowed
     *
     * @param string $value
     * @return LpItem
     */
    public function set_max_time_allowed($value)
    {
        $this->max_time_allowed = $value;
        return $this;
    }

    /**
     * Get max_time_allowed
     *
     * @return string 
     */
    public function get_max_time_allowed()
    {
        return $this->max_time_allowed;
    }

    /**
     * Set terms
     *
     * @param text $value
     * @return LpItem
     */
    public function set_terms($value)
    {
        $this->terms = $value;
        return $this;
    }

    /**
     * Get terms
     *
     * @return text 
     */
    public function get_terms()
    {
        return $this->terms;
    }

    /**
     * Set search_did
     *
     * @param integer $value
     * @return LpItem
     */
    public function set_search_did($value)
    {
        $this->search_did = $value;
        return $this;
    }

    /**
     * Get search_did
     *
     * @return integer 
     */
    public function get_search_did()
    {
        return $this->search_did;
    }

    /**
     * Set audio
     *
     * @param string $value
     * @return LpItem
     */
    public function set_audio($value)
    {
        $this->audio = $value;
        return $this;
    }

    /**
     * Get audio
     *
     * @return string 
     */
    public function get_audio()
    {
        return $this->audio;
    }
}