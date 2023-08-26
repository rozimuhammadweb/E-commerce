<!-- Sidebar Area Start Here -->
<div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color" style="height:100vh">
    <div class="mobile-sidebar-header d-md-none">
        <div class="header-logo">
            <a href="index.html"><img src="/img/logo1.png" alt="logo"></a>
        </div>
    </div>
    <div class="sidebar-menu-content">
        <ul class="nav nav-sidebar-menu sidebar-toggle-view">
            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i class="fas fa-users"></i><span>Customer</span></a>
                <ul class="nav sub-group-menu">
                    <li class="nav-item">
                        <a href="<?=\yii\helpers\Url::to(['/customer/index'])?>" class="nav-link"><i class="fas fa-angle-right"></i>Customer</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?=\yii\helpers\Url::to(['/customer-user/index'])?>" class="nav-link"><i class="fas fa-angle-right"></i>Customer User</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?=\yii\helpers\Url::to(['/customer-address/index'])?>" class="nav-link"><i class="fas fa-angle-right"></i>Customer Address</a>
                    </li>

                </ul>
            </li>
            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i class="fa fa-door-open"></i><span>Category</span></a>
                <ul class="nav sub-group-menu">
                    <li class="nav-item">
                        <a href="<?=\yii\helpers\Url::to(['/category/index'])?>" class="nav-link"><i class="fas fa-angle-right"></i>Category</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?=\yii\helpers\Url::to(['/brand/index'])?>" class="nav-link"><i class="fas fa-angle-right"></i>Brand</a>
                    </li>

                </ul>
            </li>
            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i class="fas fa-laptop-code"></i><span>Product</span></a>
                <ul class="nav sub-group-menu">
                    <li class="nav-item">
                        <a href="<?=\yii\helpers\Url::to(['/product/index'])?>" class="nav-link"><i class="fas fa-angle-right"></i>Product</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?=\yii\helpers\Url::to(['/product-image/index'])?>" class="nav-link"><i class="fas fa-angle-right"></i>Product Image</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?=\yii\helpers\Url::to(['/cart/index'])?>" class="nav-link"><i class="fas fa-angle-right"></i>Cart</a>
                    </li>


                </ul>
            </li>
            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i class="fas fa-place-of-worship"></i><span>Region</span></a>
                <ul class="nav sub-group-menu">
                    <li class="nav-item">
                        <a href="<?=\yii\helpers\Url::to(['/region/index'])?>" class="nav-link"><i class="fas fa-angle-right"></i>Region</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?=\yii\helpers\Url::to(['/district/index'])?>" class="nav-link"><i class="fas fa-angle-right"></i>District</a>
                    </li>

                </ul>
            </li>
            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i class="fas fa-door-open"></i><span>Order & Payment</span></a>
                <ul class="nav sub-group-menu">
                    <li class="nav-item">
                        <a href="<?=\yii\helpers\Url::to(['/order/index'])?>" class="nav-link"><i class="fas fa-angle-right"></i>Order</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?=\yii\helpers\Url::to(['/order-detail/index'])?>" class="nav-link"><i class="fas fa-angle-right"></i>Order Detail</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?=\yii\helpers\Url::to(['/payment/index'])?>" class="nav-link"><i class="fas fa-angle-right"></i>Payment</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?=\yii\helpers\Url::to(['/payment-method/index'])?>" class="nav-link"><i class="fas fa-angle-right"></i>Payment Method</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?=\yii\helpers\Url::to(['/payment-system/index'])?>" class="nav-link"><i class="fas fa-angle-right"></i>Payment System</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item sidebar-nav-item">
                <a href="<?=\yii\helpers\Url::to(['/meta-tag/index'])?>" class="nav-link"><i class="fas fa-layer-group"></i><span>Meta Tag</span></a>
            </li>
        </ul>
    </div>
</div>