.. include:: ../../../Includes.txt

Main Configuration
==================

::

   plugin.tx_cart {
       settings {
           cart {
               pid =
               isNetCart =
           }
           order {
               pid =
           }

           addToCartByAjax = 2278001

           autoGenerateNumbers = order

           itemsPerPage = 25
       }
   }

.. container:: table-row

   Property
      plugin.tx_cart.settings.cart.pid
   Data type
      string
   Description
      Defines the page where the cart plugin is located. This is needed to put
      products in the right shopping cart. If settings.addToCartByAjax isn't
      set, the add to cart action will forwards the user to this page.

.. container:: table-row

   Property
      plugin.tx_cart.settings.cart.isNetCart
   Data type
      boolean
   Description
      Defines whether the shopping cart should be treated as a net shopping
      cart. If the shopping cart is a net shopping cart, the price calculations
      are all carried out and displayed on the net prices of the products,
      otherwise the calculations are made with the gross prices.

.. container:: table-row

   Property
      plugin.tx_cart.settings.order.pid
   Data type
      string
   Description
      Specifies the folder in which the orders should be stored.

.. container:: table-row

   Property
      plugin.tx_cart.settings.addToCartByAjax
   Data type
      int
   Description
      Activates the option to add products via AJAX action. There is no
      forwarding to the shopping cart page. The value is used as typeNum in
      the default templates of extcode/cart-books, extcode/cart-events,
      extcode/cart-products and other product extensions.
      The response can used to display messages or update the MiniCart-Plugin.
   Default
      2278001

.. container:: table-row

   Property
      plugin.tx_cart.settings.autoGenerateNumbers
   Data type
      comma seperated string
   Description
      During the order process, the `\Extcode\Cart\Event\Order\NumberGeneratorEvent`
      is triggered. Generally, the order number is to be generated here.
      By adding further values like "invoice" and/or "delivery" these numbers
      will also be generated and saved directly after the order.
      Further values are also allowed. For this case then own EventListener must
      be registered.
      If the configuration is empty, all EventListener registered in
      extcode/cart on this event will be executed and appropriate numbers will
      be generated.
   Default
      order

.. container:: table-row

   Property
      plugin.tx_cart.settings.itemsPerPage and/or
      module.tx_cart.settings.itemsPerPage
   Data type
      int
   Description
      Defines how many records should be displayed per page in the list action.
   Default
      The default value is 20 if there is no TypoScript configuration.
