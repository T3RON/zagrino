<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Name:  Auth Lang - English
 *
 * Author: Ben Edmunds
 * 		  ben.edmunds@gmail.com
 *         @benedmunds
 *
 * Author: Daniel Davis
 *         @ourmaninjapan
 *
 * Location: http://github.com/benedmunds/ion_auth/
 *
 * Created:  03.09.2013
 *
 * Description:  English language file for Ion Auth example views
 *
 */

// Errors
$lang['error_csrf'] = 'This form post did not pass our security checks.';

// Login
$lang['login_heading']         = 'ورود به سامانه';
$lang['login_subheading']      = 'لطفا با ایمیل / نام کاربری و رمز عبور خود وارد شوید.';
$lang['login_identity_label']  = 'ایمیل یا نام کاربری:';
$lang['login_password_label']  = 'گذرواژه:';
$lang['login_remember_label']  = 'مرا به خاطر بسپار:';
$lang['login_submit_btn']      = 'ورود';
$lang['login_forgot_password'] = 'رمز عبورم را فراموش کرده ام';

// Index
$lang['index_heading']           = 'کاربران';
$lang['index_subheading']        = 'در زیر لیستی از کاربران است.';
$lang['index_fname_th']          = 'نام';
$lang['index_lname_th']          = 'نام خانوادگی';
$lang['index_email_th']          = 'ایمیل';
$lang['index_groups_th']         = 'گروه';
$lang['index_status_th']         = 'وضعیت';
$lang['index_action_th']         = 'عملیات';
$lang['index_active_link']       = 'فعال';
$lang['index_inactive_link']     = 'غیر فعال';
$lang['index_create_user_link']  = 'ساخت کاربر جدید';
$lang['index_create_group_link'] = 'ساخت گروه جدید';

// Deactivate User
$lang['deactivate_heading']                  = 'غیر فعال کردن کاربر';
$lang['deactivate_subheading']               = 'مطمئنید که میخواهید کاربر\'%s\' را غیرفعال کند';
$lang['deactivate_confirm_y_label']          = 'بله:';
$lang['deactivate_confirm_n_label']          = 'خیر:';
$lang['deactivate_submit_btn']               = 'ثبت';
$lang['deactivate_validation_confirm_label'] = 'تائیدیه';
$lang['deactivate_validation_user_id_label'] = 'آیدی کاربر';

// Create User
$lang['create_user_heading']                           = 'ساخت کاربر';
$lang['create_user_subheading']                        = 'لطفا اطلاعات کاربران را در زیر وارد کنید';
$lang['create_user_fname_label']                       = 'نام:';
$lang['create_user_lname_label']                       = 'نام خانوادگی:';
$lang['create_user_identity_label']                    = 'هویت:';
$lang['create_user_company_label']                     = 'کمپانی:';
$lang['create_user_email_label']                       = 'ایمیل:';
$lang['create_user_phone_label']                       = 'موبایل:';
$lang['create_user_password_label']                    = 'گذرواژه:';
$lang['create_user_password_confirm_label']            = 'تایید گذرواژه:';
$lang['create_user_submit_btn']                        = 'افزودن کاربر';
$lang['create_user_validation_fname_label']            = 'نام';
$lang['create_user_validation_lname_label']            = 'نام خانوادگی:';
$lang['create_user_validation_identity_label']         = 'هویت';
$lang['create_user_validation_email_label']            = 'ایمیل';
$lang['create_user_validation_phone_label']            = 'موبایل';
$lang['create_user_validation_company_label']          = 'کمپانی';
$lang['create_user_validation_password_label']         = 'گذرواژه';
$lang['create_user_validation_password_confirm_label'] = 'تایید گذرواژه';

// Edit User
$lang['edit_user_heading']                           = 'ساخت کاربر';
$lang['edit_user_subheading']                        = 'لطفا اطلاعات کاربران را در زیر وارد کنید';
$lang['edit_user_fname_label']                       = 'نام:';
$lang['edit_user_lname_label']                       = 'نام خانوادگی:';
$lang['edit_user_company_label']                     = 'هویت:';
$lang['edit_user_email_label']                       = 'کمپانی:';
$lang['edit_user_phone_label']                       = 'ایمیل:';
$lang['edit_user_password_label']                    = 'موبایل:';
$lang['edit_user_password_confirm_label']            = 'گذرواژه:';
$lang['edit_user_groups_heading']                    = 'تایید گذرواژه:';
$lang['edit_user_submit_btn']                        = 'افزودن کاربر';
$lang['edit_user_validation_fname_label']            = 'نام';
$lang['edit_user_validation_lname_label']            = 'نام خانوادگی:';
$lang['edit_user_validation_email_label']            = 'هویت';
$lang['edit_user_validation_phone_label']            = 'ایمیل';
$lang['edit_user_validation_company_label']          = 'موبایل';
$lang['edit_user_validation_groups_label']           = 'کمپانی';
$lang['edit_user_validation_password_label']         = 'گذرواژه';
$lang['edit_user_validation_password_confirm_label'] = 'تایید گذرواژه';

// Create Group
$lang['create_group_title']                  = 'ساخت گروه';
$lang['create_group_heading']                = 'ساخت گروه';
$lang['create_group_subheading']             = 'لطفا اطلاعات گروه را در زير وارد نماييد';
$lang['create_group_name_label']             = 'عنوان گروه:';
$lang['create_group_desc_label']             = 'توضيحات:';
$lang['create_group_submit_btn']             = 'ساخت گروه';
$lang['create_group_validation_name_label']  = 'عنوان گروه';
$lang['create_group_validation_desc_label']  = 'توضيحات';

// Edit Group
$lang['edit_group_title']                  = 'ويرايش گروه';
$lang['edit_group_saved']                  = 'گروه ذخيره شد';
$lang['edit_group_heading']                = 'ويرايش گروه';
$lang['edit_group_subheading']             = 'لطفا اطلاعات گروه را در زير وارد نماييد';
$lang['edit_group_name_label']             = 'عنوان گروه:';
$lang['edit_group_desc_label']             = 'توضيحات:';
$lang['edit_group_submit_btn']             = 'ذخيره گروه';
$lang['edit_group_validation_name_label']  = 'عنوان گروه';
$lang['edit_group_validation_desc_label']  = 'توضيحات';

// Change Password
$lang['change_password_heading']                               = 'تغيير گذرواژه';
$lang['change_password_old_password_label']                    = 'گذرواژه قديمي:';
$lang['change_password_new_password_label']                    = 'گذرواژه جديد (at least %s characters long):';
$lang['change_password_new_password_confirm_label']            = 'تاييد گذرواژه جديد:';
$lang['change_password_submit_btn']                            = 'تغيير';
$lang['change_password_validation_old_password_label']         = 'گذرواژه قديمي';
$lang['change_password_validation_new_password_label']         = 'گذرواژه جديد';
$lang['change_password_validation_new_password_confirm_label'] = 'تاييد گذرواژه جديد';

// Forgot Password
$lang['forgot_password_heading']                 = 'فراموشي گذرواژه';
$lang['forgot_password_subheading']              = 'لطفا٪ s خود را وارد کنید تا ما بتوانیم برای تنظیم مجدد رمز خود یک ایمیل برای شما ارسال کنیم.';
$lang['forgot_password_email_label']             = '%s:';
$lang['forgot_password_submit_btn']              = 'تاييد';
$lang['forgot_password_validation_email_label']  = 'ايميل آدرس';
$lang['forgot_password_username_identity_label'] = 'نام كاربري';
$lang['forgot_password_email_identity_label']    = 'ايميل';
$lang['forgot_password_email_not_found']         = 'هیچ سابقه ای از آن آدرس ایمیل موجود نیست';

// Reset Password
$lang['reset_password_heading']                               = 'تغيير گذرواژه';
$lang['reset_password_new_password_label']                    = 'گذرواژه جدید (حداقل٪ s نویسه طولانی):';
$lang['reset_password_new_password_confirm_label']            = 'تاييد گذرواژه جديد:';
$lang['reset_password_submit_btn']                            = 'تغيير';
$lang['reset_password_validation_new_password_label']         = 'گذرواژه جديد';
$lang['reset_password_validation_new_password_confirm_label'] = 'تاييد گذرواژه جديد';

// Activation Email
$lang['email_activate_heading']    = 'حساب٪ s را فعال کنید';
$lang['email_activate_subheading'] = 'لطفا جهت فعال سازي به ايميل %s خود مراجعه نماييد';
$lang['email_activate_link']       = 'اكانت شما فعال شد';

// Forgot Password Email
$lang['email_forgot_password_heading']    = 'بازيابي گذرواژه براي %s';
$lang['email_forgot_password_subheading'] = 'لطفا جهت فعال سازي به ايميل %s خود مراجعه نماييد';
$lang['email_forgot_password_link']       = 'گذرواژه شما بازيابي شد';

// New Password Email
$lang['email_new_password_heading']    = 'گذرواژه جديد براي %s';
$lang['email_new_password_subheading'] = 'گذرواژه شما دوباره تنظیم شده است:٪ s';

