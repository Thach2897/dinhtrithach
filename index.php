<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>My jQuery Mobile</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="jquery.mobile-1.4.5.min.css" />
    <script src="jquery-1.11.1.min.js"></script>
    <script src="jquery.mobile-1.4.5.min.js"></script>
    <!--
	<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.css" />
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.js"></script>
-->
    <script>
      
    </script>
</head>

<body>
    <!--You need to type in the structure of a single page hybrid apps-->
    <!--by using attribute data-role, value "page" in jQuery-->
    <!--This is the 1st page-->
    <div data-role="page" id="home">

        <div data-role="header">
            <h1>ATN COMPANY</h1>
            <h1>CLOUD APPLICATION FOR SALE MANAGEMENT</h1>
        </div>
        <!-- /header -->

        <div data-role="main" class="ui-content">
            <a id="btnProduct" href="#product" class="ui-btn">Product</a>
            <a id="btnCustomer" href="#customer" class="ui-btn">Customer</a>
            <a id="btnInvoice" href="#invoice" class="ui-btn">Invoice</a>

        </div>

        <div data-role="footer" data-position="fixed">
            <h4>Navigation</h4>
            <div data-role="navbar">
                <ul>
                    <li><a href="#home" data-role="button">Home</a></li>
                    <li><a href="#invoice" data-role="button">Invoice</a></li>
                </ul>
            </div>
        </div>
        <!-- /footer -->
    </div>
    <!-- /page -->
    <!-- END OF 1st PAGE-->

    <div data-role="page" id="product">

        <div data-role="header">
            <h1>Product Page</h1>
        </div>
        <!-- /header -->
        <div data-role="main" class="ui-content">

            <h2>PRODUCT</h2>
            <p>This form is to add a product item</p>
            <form id="productform" data-ajax="false" action="./product.php" method="post" onsubmit="myFunction(event)">
                <p>
                    <label for="productname">Product Name<sup>*</sup></label>
                    <input type="text" name="productname" id="productname">
                </p>
                <p>
                    <label for="productcat">Category</label>
                    <input type="text" name="productcat" id="productcat">
                </p>

                <p>
                    <label for="price">Price</label>
                    <input type="text" name="price" id="price">
                </p>
                <input type="submit" value="Add this product">
                <input type="reset" value="Reset">

            </form>

        </div>

        <div data-role="footer" data-position="fixed">
            <h4>Page Footer</h4>
            <div data-role="navbar">
                <ul>
                    <li><a href="#home" data-role="button">Home</a></li>
                    <li><a href="#invoice" data-role="button">Invoice</a></li>
                </ul>

            </div>


        </div>
    </div>
    <!-- /page -->

    <div data-role="page" id="customer">

        <div data-role="header">
            <h1>Customer Page</h1>
        </div>
        <!-- /header -->
        <div data-role="main" class="ui-content">

            <h2>CUSTOMER</h2>
            <p>This form is to add a customer item</p>
            <form data-ajax="false" id="customerform" action="./customer.php" method="post" onsubmit="myFunction(event)">
                <p>
                    <label for="productname">Customer Name<sup>*</sup></label>
                    <input type="text" name="customername" id="customername">
                </p>
                <p>
                    <label for="productcat">Gender</label>
                    <input type="text" name="gender" id="gender">
                </p>

                <p>
                    <label for="price">Date of birth</label>
                    <input type="date" name="dob" id="dob">
                </p>
                <input type="submit" value="Add this customer">
                <input type="reset" value="Reset">

            </form>

        </div>

        <!-- /content -->

        <div data-role="footer" data-position="fixed">
            <h4>Navigation</h4>
            <div data-role="navbar">
                <ul>
                    <li><a href="#home" data-role="button">Home</a></li>
                    <li><a href="#invoice" data-role="button">Invoice</a></li>
                </ul>
            </div>
        </div>
        <!-- /footer -->
    </div>
    <!-- /page -->

    <!--This is the 2nd page-->
    <div data-role="page" id="invoice">

        <div data-role="header">
            <h1>Invoice Page</h1>
        </div>
        <!-- /header -->

        <div data-role="main" class="ui-content">
            <h2>INVOICE</h2>
            <p>This form is used to add a invoice</p>
            <form data-ajax="false" id="invoiceform" action="./invoice.php" method="post" onsubmit="myFunction(event)">

                <p>
                    <label for="productname">Product Name<sup>*</sup></label>
                    <input type="text" name="product_name" id="product_name">
                </p>
                <p>
                    <label for="productcat">Customer Name</label>
                    <input type="text" name="customer_name" id="customer_name">
                </p>
                <p>
                    <label for="price">Date</label>
                    <input type="date" name="date" id="date">
                </p>
                <p>
                    <label for="quantity">Quantity</label>
                    <input type="number" name="quantity" id="quantity">
                </p>
                <p>
                    <label for="price">Total Price</label>
                    <input type="text" name="totalprice" id="toalprice">
                </p>
                <p>
                    <label for="description">Descriptions<sup>*</sup></label>
                    <textarea name="description" id="description" rows="5" cols="30"></textarea>
                </p>
                <input type="submit" value="Add this invoice">
                <input type="reset" value="Reset">
                <!--<input type="button" name="submit" id="submit" value="Submit Here">
				-->
            </form>

        </div>
        <!-- /content -->

        <div data-role="footer" data-position="fixed">
            <h4>Navigation</h4>
            <div data-role="navbar">
                <ul>
                    <li><a href="#home" data-role="button">Home</a></li>
                    <li><a href="#customer" data-role="button">Customer</a></li>
                </ul>
            </div>
        </div>
        <!-- /footer -->
    </div>
    <!-- /page -->

    <!--This is 3rd page-->



</body>

</html>