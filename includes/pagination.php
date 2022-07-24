<div class="row stronicowanie mt-3 mb-3">
    <div class="col-md-2 col-sm-2 col-2 text-center">
        <a href="?pageno=1" class="max_back disabled">
            <i class="fas fa-angle-double-left"></i>
        </a>
    </div>	
    <div class="col-md-2 col-sm-2 col-2 text-center">
        <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>" class="sback">
            <i class="fas fa-angle-left"></i>
        </a>
    </div>		
    <div class="col-md-4 col-sm-4 col-4 text-center">
        <div class="number">Strona <?php echo $pageno ?> z <?php echo $total_pages ?></div>
    </div>	
    <div class="col-md-2 col-sm-2 col-2 text-center">
        <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>" class="sforward">
            <i class="fas fa-angle-right"></i>
        </a>
    </div>		
    <div class="col-md-2 col-sm-2 col-2 text-center">
        <a href="?pageno=<?php echo $total_pages; ?>" class="max_forward">
            <i class="fas fa-angle-double-right"></i>
        </a>
    </div>	
</div>