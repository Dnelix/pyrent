<?php
    function curPageName() {
    return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
    }

    $page = curPageName();
    $pag = explode('.',$page);
    $pgz = $pag[0];

    switch($pgz){
        case 'home':
        $pagetitle = "Your Trusted Online Rent Payment Services | PayRent.ng";
        $metatitle = "Your Trusted Online Rent Payment Services | PayRent.ng";
        $metakeys = "home, rent, rentpayment, landlords, payment, apartment, managers, tenants, propertymanagement, property, landlordsoftware";
        $metadesc = "Collecting and paying rent has never been this easy. With the online rent payment services offered by payrent.ng, your life will become less of a hassle!";
        break;
        
        case 'landlords':
        $pagetitle = "Efficiently Collect Rent Online For Free";
        $metatitle = "Efficiently Collect Rent Online For Free";
		$metakeys = "owner, rent, rentpayment, landlords, payment, apartment, managers, tenants, propertymanagement, property, landlordsoftware";
        $metadesc = "Collecting rent can be a daunting task. But with payrent.ng, you can collect rent online for free efficiently and securely! Find out more.";
        break;
        case 'renters':
        $pagetitle = "Pay Your Rent Online The Safe And Secure Way";
        $metatitle = "Pay Your Rent Online The Safe And Secure Way";
		$metakeys = "renters, rent, rentpayment, landlords, payment, apartment, managers, tenants, propertymanagement, property, landlordsoftware";
        $metadesc = "One of our biggest worries is the security and safety of our payments. Now, you can pay your rent online with payrent.ng! It's safe, secure, and easy!";
        break;
        case 'contact':
        $pagetitle = "PayRent || Contact Us";
        $metatitle = "Contact Us For All Your Rent Payment Needs";
		$metakeys = "contact, rent, rentpayment, landlords, payment, apartment, managers, tenants, propertymanagement, property, landlordsoftware";
        $metadesc = "For all your inquiries and concerns, don't hesitate to contact us. Our staff at payrent.ng will be available to assist you with your needs.";
        break;
		case 'privacy_policy':
        $pagetitle = "PayRent || Our Privacy Policy";
        $metatitle = "PayRent || Our Privacy Policy";
		$metakeys = "privacy, policy, rent, rentpayment, landlords, payment, apartment, managers, tenants, propertymanagement, property, landlordsoftware";
        $metadesc = "Your information is safe with us. At payrent.ng, we make sure that every transaction is secure. To know more, read our Privacy Policy here.";
        break;
		case 'signup':
        $pagetitle = "PayRent || Easy Sign Up";
        $metatitle = "Easy Signup for Online Rent Payments Solutions";
		$metakeys = "signup, rent, rentpayment, landlords, payment, apartment, managers, tenants, propertymanagement, property, landlordsoftware";
        $metadesc = "Start an easier lifestyle with payrent.ng. Signup for online rent payments now and make things easier for you and your landlord! Don't worry; it's that easy!";
        break;
		case 'terms_conditions':
        $pagetitle = "Our Terms And Conditions";
        $metatitle = "Our Terms And Conditions";
		$metakeys = "terms, rent, rentpayment, landlords, payment, apartment, managers, tenants, propertymanagement, property, landlordsoftware";
        $metadesc = "To understand more of the products and services we offer at payrent.ng, read our Terms and Conditions thoroughly. Make sure you don't skip a part!";
        break;


        default:
        $pagetitle = "Your Trusted Online Rent Payment Services | PayRent.ng";
        $metatitle = "Your Trusted Online Rent Payment Services | PayRent.ng";
        $metakeys = "home, rent, rentpayment, landlords, payment, apartment, managers, tenants, propertymanagement, property, landlordsoftware";
        $metadesc = "Collecting and paying rent has never been this easy. With the online rent payment services offered by payrent.ng, your life will become less of a hassle!";

    }
?>