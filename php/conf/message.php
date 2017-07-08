<?php

/*---------------------------消息提示配置----------------------------*/


/*getCode函数*/
$message['getCodeAction'][0]        = array('errcode' => '11', 'errmsg' => 'params errors!');

/*login函数*/
$message['loginAction'][0]          = array('errcode' => '11', 'errmsg' => 'params errors!');
$message['loginAction'][1]          = array('errcode' => '6', 'errmsg' => 'mobile Format errors!');
$message['loginAction'][2]          = array('errcode' => '2', 'errmsg' => 'code errors!');
$message['loginAction'][3]          = array('errcode' => '3', 'errmsg' => 'The account does not exist!');
$message['loginAction'][4]          = array('errcode' => '4', 'errmsg' => 'password was incorrect!'); //not exist code
$message['loginAction'][5]          = array('errcode' => '8', 'errmsg' => 'return the captcha!');
$message['loginAction'][6]          = array('errcode' => '99', 'errmsg' => 'password was incorrect!'); //exist code

/*loginUserInfo函数*/
$message['loginUserInfoAction'][0]  = array('errcode' => '11', 'errmsg' => 'params errors!');
$message['loginUserInfoAction'][1]  = array('errcode' => '9', 'errmsg' => 'cookie expire!');
$message['loginUserInfoAction'][2]  = array('errcode' => '17', 'errmsg' => 'new device login');

/*register函数*/
$message['registerAction'][0]       = array('errcode' => '11', 'errmsg' => 'params errors!');
$message['registerAction'][1]       = array('errcode' => '6', 'errmsg' => 'mobile Format errors!');
$message['registerAction'][2]       = array('errcode' => '7', 'errmsg' => 'mobile phone number already exists!');
$message['registerAction'][3]       = array('errcode' => '5', 'errmsg' => 'mobile code errors!');
$message['registerAction'][4]       = array('errcode' => '13', 'errmsg' => 'register errors!');
$message['registerAction'][5]       = array('errcode' => '44', 'errmsg' => 'password length gt 6!');

/*getMobileCode函数*/
$message['getMobileCodeAction'][0]  = array('errcode' => '11', 'errmsg' => 'params errors!');
$message['getMobileCodeAction'][5]       = array('errcode' => '34', 'errmsg' => 'white list not allowed!');
$message['getMobileCodeAction'][6]       = array('errcode' => '35', 'errmsg' => 'white list file exists!');
$message['getMobileCodeAction'][7]       = array('errcode' => '36', 'errmsg' => 'white list data not empty!');

/*changePassword函数*/
$message['changePasswordAction'][3]  = array('errcode' => '15', 'errmsg' => 'changePassword errors!');
$message['changePasswordAction'][4]  = array('errcode' => '28', 'errmsg' => 'the new password is same as old one!');
$message['changePasswordAction'][5]  = array('errcode' => '10', 'errmsg' => 'old password errors!');

/*replaceMobileNum函数*/
$message['replaceMobileNumAction'][0]  = array('errcode' => '11', 'errmsg' => 'params errors!');
$message['replaceMobileNumAction'][4]  = array('errcode' => '14', 'errmsg' => 'two change the mobile phone number did not change!');

/*resetPassword函数*/
$message['resetPasswordAction'][0]  = array('errcode' => '11', 'errmsg' => 'params errors!');
$message['resetPasswordAction'][2]  = array('errcode' => '1', 'errmsg' => 'Mobile phone number does not exist!');
$message['resetPasswordAction'][3]  = array('errcode' => '12', 'errmsg' => 'resetPassword errors!');


/*findAccount函数*/
$message['findAccountAction'][0]  = array('errcode' => '11', 'errmsg' => 'params errors!');
$message['findAccountAction'][1]  = array('errcode' => '6', 'errmsg' => 'mobile Format errors!');
$message['findAccountAction'][2]  = array('errcode' => '7', 'errmsg' => 'mobile phone number already exists!');
$message['findAccountAction'][5]       = array('errcode' => '34', 'errmsg' => 'white list not allowed!');
$message['findAccountAction'][6]       = array('errcode' => '35', 'errmsg' => 'white list file exists!');
$message['findAccountAction'][7]       = array('errcode' => '36', 'errmsg' => 'white list data not empty!');

/*chkSMSCode函数*/
$message['chkSMSCodeAction'][0]  = array('errcode' => '11', 'errmsg' => 'params errors!');
$message['chkSMSCodeAction'][1]  = array('errcode' => '6', 'errmsg' => 'mobile Format errors!');
$message['chkSMSCodeAction'][2]  = array('errcode' => '5', 'errmsg' => 'mobile code errors!');

/*submitDevInfo*/
$message['submitDevInfoAction'][0]  = array('errcode' => '16', 'errmsg' => 'no post device info!');

/*avater*/
$message['uploadAvatarAction'][0]  = array('errcode' => '18', 'errmsg' => 'file data empty!');
$message['uploadAvatarAction'][1]  = array('errcode' => '19', 'errmsg' => 'upload type errors');
$message['uploadAvatarAction'][2]  = array('errcode' => '20', 'errmsg' => 'upload errors!');
$message['uploadAvatarAction'][3]  = array('errcode' => '21', 'errmsg' => 'failed to upload!');


/*visiting*/
$message['uploadVisitingAction'][0]  = array('errcode' => '18', 'errmsg' => 'file data empty!');
$message['uploadVisitingAction'][1]  = array('errcode' => '19', 'errmsg' => 'upload type errors');
$message['uploadVisitingAction'][2]  = array('errcode' => '20', 'errmsg' => 'upload errors!');
$message['uploadVisitingAction'][3]  = array('errcode' => '21', 'errmsg' => 'failed to upload!');


/*changeRealName函数*/
$message['changeRealNameAction'][0]  = array('errcode' => '30', 'errmsg' => 'real_name empty!');
$message['changeRealNameAction'][1]  = array('errcode' => '31', 'errmsg' => 'The old and the new real_name!');
$message['changeRealNameAction'][2]  = array('errcode' => '32', 'errmsg' => 'real_name errors!');

/*im/getMobileInfo函数*/
$message['getMobileInfoAction'][0] = array('errcode' => '11', 'errmsg' => 'params errors!');
$message['getMobileInfoAction'][1] = array('errcode' => '38', 'errmsg' => 'mobile format errors!');

/*im/addFriend函数*/
$message['addFriendAction'][0] = array('errcode' => '11', 'errmsg' => 'params errors!');
$message['addFriendAction'][1] = array('errcode' => '39', 'errmsg' => 'add friend errors!');
$message['addFriendAction'][2] = array('errcode' => '43', 'errmsg' => 'is friend');

/*im/deleteFriend函数*/
$message['deleteFriendAction'][0] = array('errcode' => '11', 'errmsg' => 'params errors!');
$message['deleteFriendAction'][1] = array('errcode' => '40', 'errmsg' => 'delete friend errors!');

/*im/getFriendList函数*/
$message['getFriendListAction'][0] = array('errcode' => '41', 'errmsg' => 'get friend errors!');

/*im/applyFriend函数*/
$message['applyFriendAction'][0] = array('errcode' => '11', 'errmsg' => 'params errors!');
$message['applyFriendAction'][1] = array('errcode' => '42', 'errmsg' => 'add friend errors!');

/*im/messageFriend函数*/
$message['messageFriendAction'][0] = array('errcode' => '11', 'errmsg' => 'params errors!');
$message['messageFriendAction'][1] = array('errcode' => '42', 'errmsg' => 'add friend errors!');

/*user/getUserInfo函数*/
$message['getUserInfoAction'][0] = array('errcode' => '11', 'errmsg' => 'params errors!');
$message['getUserInfoAction'][1] = array('errcode' => '44', 'errmsg' => 'not find user!');

/*user/regFindAccount函数*/
$message['regFindAccountAction'][0]  = array('errcode' => '11', 'errmsg' => 'params errors!');
$message['regFindAccountAction'][1]  = array('errcode' => '6', 'errmsg' => 'mobile Format errors!');
$message['regFindAccountAction'][2]  = array('errcode' => '5', 'errmsg' => 'mobile code errors!');
$message['regFindAccountAction'][3]  = array('errcode' => '13', 'errmsg' => 'register errors!');

/*user/regAddUserInfo函数*/
$message['regAddUserInfoAction'][0]  = array('errcode' => '11', 'errmsg' => 'params errors!');
$message['regAddUserInfoAction'][1]  = array('errcode' => '6', 'errmsg' => 'updata userinfo errors!');