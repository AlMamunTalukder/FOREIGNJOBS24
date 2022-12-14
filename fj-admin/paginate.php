<?php
function paginate($total_rows, $targetpage, $limit){   
	// when it hides extra links for other pages 
	// this number represents how many page links will be shown from left and right of the current page
    $stages = 3;
	
    $page = (int)$_GET['page'];	
	
    if($page){
        $start = ($page - 1) * $limit;
    }else{
        $start = 0;
    }
 
    // Initial page num setup
    if ($page == 0){$page = 1;}
    $prev = $page - 1;
    $next = $page + 1;
    $lastpage = ceil($total_rows/$limit);

    $LastPagem1 = $lastpage - 1;                   
 
    $paginate = '';
    if($lastpage > 1)
    {  
 
        $paginate .= "<div class='paginate'>";
        // Previous
        if ($page > 1){
            $paginate.= "<a href='$targetpage?page=$prev'>previous</a>";
        }else{
            $paginate.= "<span class='disabled'>previous</span>"; }
 
        // Pages
        if ($lastpage < 7 + ($stages * 2))   // Not enough pages to breaking it up
        {
            for ($counter = 1; $counter <= $lastpage; $counter++)
            {
                if ($counter == $page){
                    $paginate.= "<span class='current'>$counter</span>";
                }else{
                    $paginate.= "<a href='$targetpage?page=$counter'>$counter</a>";}
            }
        }
        elseif($lastpage > 5 + ($stages * 2))    // Enough pages to hide a few?
        {
            // Beginning only hide later pages
            if($page < 1 + ($stages * 2))
            {
                for ($counter = 1; $counter < 4 + ($stages * 2); $counter++)
                {
                    if ($counter == $page){
                        $paginate.= "<span class='current'>$counter</span>";
                    }else{
                        $paginate.= "<a href='$targetpage?page=$counter'>$counter</a>";}
                }
                $paginate.= "...";
                $paginate.= "<a href='$targetpage?page=$LastPagem1'>$LastPagem1</a>";
                $paginate.= "<a href='$targetpage?page=$lastpage'>$lastpage</a>";
            }
			
            // Middle hide some front and some back
            elseif($lastpage - ($stages * 2) > $page && $page > ($stages * 2))
            {
                $paginate.= "<a href='$targetpage?page=1'>1</a>";
                $paginate.= "<a href='$targetpage?page=2'>2</a>";
                $paginate.= "...";
                for ($counter = $page - $stages; $counter <= $page + $stages; $counter++)
                {
                    if ($counter == $page){
                        $paginate.= "<span class='current'>$counter</span>";
                    }else{
                        $paginate.= "<a href='$targetpage?page=$counter'>$counter</a>";}
                }
                $paginate.= "...";
                $paginate.= "<a href='$targetpage?page=$LastPagem1'>$LastPagem1</a>";
                $paginate.= "<a href='$targetpage?page=$lastpage'>$lastpage</a>";
            } else      // End only hide early pages 
			{
                $paginate.= "<a href='$targetpage?page=1'>1</a>";
                $paginate.= "<a href='$targetpage?page=2'>2</a>";
                $paginate.= "...";
                for ($counter = $lastpage - (2 + ($stages * 2)); $counter <= $lastpage; $counter++)
                {
                    if ($counter == $page){
                        $paginate.= "<span class='current'>$counter</span>";
                    }else{
                        $paginate.= "<a href='$targetpage?page=$counter'>$counter</a>";}
                }
            }
        }
 
                // Next
        if ($page < $counter - 1){
            $paginate.= "<a href='$targetpage?page=$next'>next</a>";
        }else{
            $paginate.= "<span class='disabled'>next</span>";
		}
 
        $paginate.= "</div>";   
		// pagination
	
	return $paginate;   
 
}
 
}
?>
