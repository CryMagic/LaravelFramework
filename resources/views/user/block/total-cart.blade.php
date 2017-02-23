<div class="col-lg-3 col-md-3 col-sm-12 rightSidebar">
    <div class="w100 cartMiniTable">
        <table id="cart-summary" class="std table">
            <tbody>
                <tr>
                    <td>Tổng giá trị sản phẩm</td>
                    <td class="price">{{ Cart::total(00,",",".") }} đ</td>
                </tr>
                <tr style="">
                    <td>Shipping</td>
                    <td class="price"><span class="success">Miễn phí giao hàng!</span></td>
                </tr>
                <tr class="cart-total-price ">
                    <td>Tổng tiền (chưa tính thuế)</td>
                    <td class="price">{{ Cart::total(00,",",".") }} đ</td>
                </tr>
                <tr>
                    <td>Tiền thuế</td>
                    <td class="price" id="total-tax">0 đ</td>
                </tr>
                <tr>
                    <td> Tổng tiền</td>
                    <td class=" site-color" id="total-price">{{ Cart::total(00,",",".") }} đ</td>
                </tr>
            </tbody>
            <tbody></tbody>
        </table>
    </div>
</div>