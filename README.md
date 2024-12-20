# Laravel Nova issue with scoping model searches with Scout/Algolia

### How to test

1. Clone the repository
2. Run `composer install`
3. Run `php artisan migrate`
4. Run `php artisan db:seed`
5. Index the products in Algolia by running `php artisan scout:import "App\Product"`
6. Run `php artisan serve`
7. Open `http://localhost:8000/nova`
8. Go to the Products and look for some "premium" products. You should see that multiple suppliers have "premium" products.
9. Now go to the single supplier details page and try to search for "premium" products. You should see that the search results are not scoped to the supplier.

Now disable Scout for Product
```php
public static function usesScout(): bool
{
    return false;
}
```

And now you see scoped products per supplier.
