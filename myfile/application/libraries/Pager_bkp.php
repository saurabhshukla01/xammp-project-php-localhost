<?php

class Pager 
{
    private $class_pagination = 'pagination';
    private $class_default = 'page';
    private $class_disabled = 'disabled';
    private $class_current = 'current';

    function setStyles($pagination = '', $default = '', $disabled = '', $current = '')
    {
        if ($pagination != '') {
            $this->class_pagination = $pagination;
        }
        if ($default != '') {
            $this->class_default = $default;
        }
        if ($disabled != '') {
            $this->class_disabled = $disabled;
        }
        if ($current != '') {
            $this->class_current = $current;
        }
    }

    function showLinks($url, $current_page, $total_records, $rpp = 5, $adjacents = 2)
    {
        $class_pagination = $this->class_pagination;
        $page = $this->class_default;
        $current = $this->class_current;
        $disabled = $this->class_disabled;
        $pagination = "";
        $prev = $current_page - 1; // previous page is page - 1
        $next = $current_page + 1; // next page is page + 1
        $lastpage = ceil($total_records / $rpp); // lastpage is = total pages / items per page, rounded up.
        $lpm1 = $lastpage - 1; // last page minus 1
        $prev = $url . '?page=' . $prev;
        if ($lastpage > 1) {
            $pagination .= "<div><ul class=\"$class_pagination\">";
            // previous button
            if ($current_page > 1){
                $pagination .= "<li><a href=\"$prev\" class=\"$page\"> << previous</a></li>";
            }else{
                $pagination .= "<li><span class=\"$disabled\"> << previous</span></li>";
            }
// pages
            if($lastpage < 7 + ($adjacents * 2)){ // not enough pages to bother breaking it up
                    for ($counter = 1; $counter <= $lastpage; $counter ++) {
                        $i = $url . '?page=' . $counter;
                        if ($counter == $current_page){
                            $pagination .= "<li class=\"$current\"><a>$counter</a></li>";
                        }else{
                            $pagination .= "<li><a href=\"$i\" class=\"$page\">$counter</a></li>";
                        }
                    }
            } elseif ($lastpage > 5 + ($adjacents * 2)){// enough pages to hide some // close to beginning; only hide later pages
                if ($current_page < 1 + ($adjacents * 2)) {
                    for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter ++) {
                        $i = $url . '?page=' . $counter;
                        if ($counter == $current_page)
                            $pagination .= "<li class=\"$current\"><a>$counter</a></li>";
                        else
                            $pagination .= "<li><a href=\"$i\" class=\"$page\">$counter</a></li>";
                    }
                    $lpm11 = $url . '?page=' . $lpm1;
                    $lastpage1 = $url . '?page=' . $lastpage;
                    $pagination .= "<li><a href=\"javascript: void(0)\">...</a></li>";
                    $pagination .= "<li><a href=\"$lpm11\" class=\"$page\">$lpm1</a></li>";
                    $pagination .= "<li><a href=\"$lastpage\" class=\"$page\">$lastpage</a></li>";
                } elseif ($lastpage - ($adjacents * 2) > $current_page && $current_page > ($adjacents * 2)) { // in middle; hide some front and some back
                    $pagination .= "<li><a href=\"$url?page=1\" class=\"$page\">1</a></li>";
                    $pagination .= "<li><a href=\"$url?page=2\" class=\"$page\">2</a></li>";
                    $pagination .= "<li><a href=\"javascript: void(0)\">...</a></li>";
                    for ($counter = $current_page - $adjacents; $counter <= $current_page + $adjacents; $counter ++) {
                        $i = $url . '?page=' . $counter;
                        if ($counter == $current_page)
                            $pagination .= "<li class=\"$current\"><a>$counter</a></li>";
                        else
                            $pagination .= "<li><a href=\"$i\" class=\"$page\">$counter</a></li>";
                    }
                    $lpm11 = $url . '?page=' . $lpm1;
                    $lastpage1 = $url . '?page=' . $lastpage;
                    $pagination .= "<li><a href=\"javascript: void(0)\">...</a></li>";
                    $pagination .= "<li><a href=\"$lpm11\" class=\"$page\">$lpm1</a></li>";
                    $pagination .= "<li><a href=\"$lastpage1\" class=\"$page\">$lastpage</a></li>";
                }else { // close to end; only hide early pages
                    $pagination .= "<li><a href=\"$url?page=1\" class=\"$page\">1</a></li>";
                    $pagination .= "<li><a href=\"$url?page=2\" class=\"$page\">2</a></li>";
                    $pagination .= "<li><a href=\"javascript: void(0)\">...</a></li>";
                    for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter ++) {
                        $i = $url . '?page=' . $counter;
                        if ($counter == $current_page)
                            $pagination .= "<li class=\"$current\"><a>$counter</a></li>";
                        else
                            $pagination .= "<li><a href=\"$i\" class=\"$page\">$counter</a></li>";
                    }
                }
            }
// next button
            if ($current_page < $counter - 1) {
                $next = $url . '?page=' . $next;
                $pagination .= "<li><a href=\"$next\" class=\"$page\">next >></a></li>";
            } else {
                $pagination .= "<li><span class=\"$disabled\">next >></span></li>";
            }
            $pagination .= "</ul></div>\n";
        }
        return $pagination;
    }
}
