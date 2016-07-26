<?php



Route::get('/',[
	'uses' => 'ProductController@index',
	'as' => 'index.product'

	]);



Route::get('/signUp',[

		'uses' => 'UserController@GetSignUp',
		'as' => 'user.GetsignUp'
	]);



Route::post('/signUp',[

		'uses' => 'UserController@PostSignUp',
		'as' => 'user.signUp'
	]);





Route::get('/signIn',[

		'uses' => 'UserController@GetSignIn',
		'as' => 'user.signIn'
	]);



Route::post('/signIn',[

		'uses' => 'UserController@PostSignIn',
		'as' => 'user.signIn'
	]);



Route::get('user/profile',[
	'uses' => 'UserProfile@index',
	'as' => 'user.profile'

	]);





Route::get('/imageFile',[

	'uses' => 'addImageFileController@getImageFile',
	'as' => 'getImage.imageFile'

	]);

Route::post('/imageFile',[

	'uses' => 'addImageFileController@addImageFile',
	'as' => 'addImage.imageFile'

	]);

Route::get('/imageShow',[

	'uses' => 'addImageFileController@showList',
	'as' => 'addImage.imageFile'

	]);


//////// Electronics Device is working FINE...............


Route::get('/electronicDevice',[
	'uses' => 'ElectronicDeviceController@getDevice',
	'as' => 'device.getDevice'

	]);


Route::post('/electronicDevice',[
	'uses' => 'ElectronicDeviceController@postDevice',
	'as' => 'device.getDevice'

	]);





Route::get('/mobileDevice',[
	'uses' => 'mobileDeviceController@getMobileDevice',
	'as' => 'mobile.mobileDevice'
	
	]);

Route::post('/mobileDevice',[
	'uses' => 'mobileDeviceController@postMobileDevice',
	'as' =>'mobile.mobileDevice'

	]);


Route::get('/Tshirt',[
	'uses' => 'ClotheController@getTshirt',
	'as' => 'clothe.Tshirt'

	]);



Route::post('/Tshirt',[
	'uses' => 'ClotheController@postTshirt',
	'as' => 'clothe.Tshirt'

	]);

Route::get('/jeans',[
	'uses' => 'ClotheController@getJeans',
	'as' => 'clothe.jeans'

	]);
Route::post('/jeans',[
	'uses' => 'ClotheController@postJeans',
	'as' => 'clothe.jeans'

	]);


Route::get('/maleShoe',[
	'uses' => 'ShoeController@getMaleShoe',
	'as' => 'maleShoe.shoe'

	]);

Route::post('/maleShoe',[
	'uses' => 'ShoeController@postMaleShoe',
	'as' => 'maleShoe.shoe'

	]);


Route::get('/femaleShoe',[
	'uses' => 'ShoeController@getFemaleShoe',
	'as' => 'femaleShoe.shoe'

	]);
Route::post('/femaleShoe',[
	'uses' => 'ShoeController@postFemaleShoe',
	'as' => 'femaleShoe.shoe'

	]);





// ..............This is the Final Cart Page...........


Route::get('/cart',[
	'uses' => 'addToCart@indexCart',
	'as' => 'cart'


	]);


Route::post('/check',[
	'uses' => 'CheckProceed@check',
	'as' => 'route.check'

	]);


 // >>>>>>>>>>>>>>>>>>>>>>>>>>>>>Starting AddToCartPage>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

// ..............Post the Electronics Devices Component to the Add to Cart Page...........

Route::post('/addToCartEdevice',[

	'uses' => 'addToCart@eDeviceCartPage',
	'as' => 'addToCartElectronicsDevice.Cart'

	]);

// ..............Post the Mobile Component to the Add to Cart Page...........

Route::post('/addToCartMobile',[

	'uses' => 'addToCart@mobileCartPage',
	'as' => 'addToCartMobile.Cart'

	]);

// ..............Post the T-Shirt Component to the Add to Cart Page...........

Route::post('/addToCartTshirt',[

	'uses' => 'addToCart@TshirtCartPage',
	'as' => 'addToCartTshirt.Cart'

	]);

// ..............Post the Jeans Component to the Add to Cart Page...........

Route::post('/addToCartJeans',[

	'uses' => 'addToCart@jeansCartPage',
	'as' => 'addToCartJeans.Cart'

	]);

// ..............Post the Male Component to the Add to Cart Page...........



Route::post('/addToCartMale',[

	'uses' => 'addToCart@maleCartPage',
	'as' => 'addToCartMale.Cart'

	]);

// ..............Post the Female Component to the Add to Cart Page...........



Route::post('/addToCartFemale',[

	'uses' => 'addToCart@CartPage',
	'as' => 'addToCartFemale.Cart'

	]);


// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>Ending AddToCartPage>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>




/*

Route::get('/dropdown',[
	'uses' => 'SlideShow@index',
	'as' => 'dropdown'

	]);

	*/



Route::get('/dropdown',[
	'uses' => 'dropdown@index',
	'as'	=>'dropdown.menu'

	]);


Route::post('/order',[

	'uses' => 'OrderController@getOrder',
	'as' => 'getOrder.Order'

	]);
/*

Route::get('/check',[
	'uses' => 'CheckProceed@check',
	'as' => 'route.check'

	]);

	*/

/////////////////// placeOrder/Checking///////////

Route::post('/registrationAndProceed',[
	'uses' => 'CheckProceed@userAuthentication',
	'as' => 'route.registrationAndProceed'

	]);

Route::get('/cashmemo',[
	'uses' => 'CashMemo@memo',
	'as' => 'route.cashmemo'

	]);

Route::get('/memo',[
	'uses' => 'CashMemo@FinalMemo',
	'as' => 'route.FinalMemo'


	]);

///////////// PayMent System////////////

Route::post('/payment',[
	'uses' => 'PayMent@PayMentPage',
	'as' => 'route.PayMentPage'

	]);

Route::post('/shoppingComplete',[
	'uses' => 'PayMent@shoppingComplete',
	'as' => 'shopping'

	]);