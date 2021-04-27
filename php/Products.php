<?php
class Products
{
    public static $url = "https://fakestoreapi.com/products";
    public static function getProducts()
    {
        $products_json = @file_get_contents(self::$url);
        if (!$products_json) {
            throw new Exception('The page' . self::$url . 'cannot be accesed');
        }
        return json_decode($products_json, true);
    }
    public static function main()
    {
        try {
            $products_array = self::getProducts();
            self::showProducts($products_array);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public static function showProducts($products)
    {
        $query_string = isset($_GET['category']) ?? null;

        if ($query_string) {


            if ($_GET['category'] === 'women') {
                self::getCategory($products, 'women\'s clothing');
            } elseif ($_GET['category'] === 'men') {
                self::getCategory($products, 'men\'s clothing');
            } elseif ($_GET['category'] === 'jewelery') {
                self::getCategory($products, 'jewelery');
            } else {
                header("Location: ./");
            }
        } else {
            echo "<div class='carousel-inner' role='listbox'>";
            foreach ($products as  $key => $item) {
                if ($item['category'] === 'women\'s clothing' || $item['category'] === 'men\'s clothing' || $item['category'] === 'jewelery') {
                    if ($item['id'] === 1) {
                        echo "<div class='carousel-item active'>";
                    } else {
                        echo "<div class='carousel-item'>";
                    }
                    echo "<img class='d-block img-fluid' src=$item[image] >";
                    echo "</div>";
                }
            }
            echo "</div>
                <a class='carousel-control-prev' href='#carouselExampleIndicators' role='button' data-slide='prev'>
                    <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                    <span class='sr-only'>Previous</span>
                </a>
                <a class='carousel-control-next' href='#carouselExampleIndicators' role='button' data-slide='next'>
                    <span class='carousel-control-next-icon' aria-hidden='true'></span>
                    <span class='sr-only'>Next</span>
                </a>
                </div>";
        }
    }
    public static function getCategory($products, $product_category)
    {
        echo "<div class='row'>";
        echo "<h4 class='col-12 p-3 heading'>$product_category </h4>";
        foreach ($products as  $item) {
            if ($item['category'] === $product_category) {
                $category = "<div class='col-lg-6 col-md-6 mb-4'>";
                $category .= "<div class='card h-100'>";
                $category .= "<a href='#'><img class='card-img-top' src=$item[image]></a>";
                $category .=  "<div class='card-body'>";
                $category .=  "<h4 class='card-title'>";
                $category .=  "<a href='#'>$item[title]</a>  
                                </h4>
                                 <h5>SEK $item[price]</h5>
                                 <p class='card-text'>$item[description]</p>
                                </div>
                                <div class='card-footer'>
                                <small class='text-muted'>&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                                </div>
                                </div>
                                </div>";
                echo $category;
            }
        }
        echo "</div>";
    }
}
