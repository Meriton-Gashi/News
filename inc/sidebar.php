<aside class="col-md-4 sidebar">
    <article class="categories ml-1">
        <h4>Categories</h4>
        <div class="list-group list-unstyled mb-3">
            <?php
                $category= new \Admin\Libs\Category;
                foreach($category->find_all() as $cat){
                    echo "<a class='list-group-item list-group-item-light' 
                    href='#'>{$cat->getName()}</a></li>";
                }
            ?>
        </div>
        </div>
        
</aside


