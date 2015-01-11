<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author Marc
 */
class Student {
    
    
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    function add_email($which, $address)
    {
        $this->emails[$which] = $address;
    }
    
    function add_grade($grade)
    {
        $this->grades[] = $grade;
    }
    
    function average()
    {
        $total = 0;
        foreach( $this->grades as $value )
            $total += value;
        
        return total / count($this->grades);
    }
    
    function __toString()
    {
        $result  = $this->first_name . ' ' . $this->surname;
        $result .= ' (' . $this->average() . ')' . PHP_EOL;
        foreach( $this->emails as which_email=>$what_email )
        {
            $result .= $which_email . ': ' . $what_email . PHP_EOL;
        }
        
                
        return '<pre>' . $result . '<pre>';
    }
    
}
