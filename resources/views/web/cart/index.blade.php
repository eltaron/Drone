@extends('web.layouts.app')
@push('styles')
    <link rel="stylesheet" href="{{asset('web_files')}}/css/cart.css">
@endpush
@section('content')
    <div class="wrap cf">
      <div class="heading cf">
        <h1>My Cart</h1>
        <a href="#" class="continue">Continue Shopping</a>
      </div>
      <div class="cart">
        <ul class="cartWrap">
          <li class="items odd">

            <div class="infoWrap">
              <div class="cartSection">
                <img src="images/logow.png" alt="" class="itemImg" />
                <p class="itemNumber">#QUE-007544-002</p>
                <h3>Item Name 1</h3>

                <p> <input type="number" class="qty" placeholder="1" min="1"> x $5.00</p>

                <p class="stockStatus"> In Stock</p>
              </div>


              <div class="prodTotal cartSection">
                <p>$15.00</p>
              </div>
              <div class="cartSection removeWrap">
                <a href="#" class="remove">x</a>
              </div>
            </div>
          </li>
          <li class="items even">

            <div class="infoWrap">
              <div class="cartSection">

                <img src="images/logoc.png" alt="" class="itemImg" />
                <p class="itemNumber">#QUE-007544-002</p>
                <h3>Item Name 1</h3>

                <p> <input type="number" class="qty" placeholder="1" min="1"> x $5.00</p>

                <p class="stockStatus"> In Stock</p>
              </div>


              <div class="prodTotal cartSection">
                <p>$15.00</p>
              </div>
              <div class="cartSection removeWrap">
                <a href="#" class="remove">x</a>
              </div>
            </div>
          </li>

          <li class="items odd">
            <div class="infoWrap">
              <div class="cartSection">

                <img src="images/logow.png" alt="" class="itemImg" />
                <p class="itemNumber">#QUE-007544-002</p>
                <h3>Item Name 1</h3>

                <p><input type="number" class="qty" placeholder="1" min="1"> x $5.00</p>

                <p class="stockStatus out"> Out of Stock</p>
              </div>


              <div class="prodTotal cartSection">
                <p>$15.00</p>
              </div>
              <div class="cartSection removeWrap">
                <a href="#" class="remove">x</a>
              </div>
            </div>
          </li>
          <li class="items even">
            <div class="infoWrap">
              <div class="cartSection info">

                <img src="images/logoc.png" alt="" class="itemImg" />
                <p class="itemNumber">#QUE-007544-002</p>
                <h3>Item Name 1</h3>

                <p><input type="number" class="qty" placeholder="1" min="1">x $5.00</p>

                <p class="stockStatus"> In Stock</p>

              </div>


              <div class="prodTotal cartSection">
                <p>$15.00</p>
              </div>

              <div class="cartSection removeWrap">
                <a href="#" class="remove">x</a>
              </div>
            </div>
          </li>
        </ul>
      </div>

      <div class="subtotal cf">
        <ul>
          <li class="totalRow"><span class="label">Subtotal</span><span class="value">$35.00</span></li>

          <li class="totalRow"><span class="label">Shipping</span><span class="value">$5.00</span></li>

          <li class="totalRow"><span class="label">Tax</span><span class="value">$4.00</span></li>
          <li class="totalRow final"><span class="label">Total</span><span class="value">$44.00</span></li>
          <li class="totalRow"><a href="#" class="btn continue">Checkout</a></li>
        </ul>
      </div>
    </div>


@push('scripts')
<script src="{{asset('web_files')}}/vendor/js/bootstrap.bundle.min.js"></script>
@endpush
