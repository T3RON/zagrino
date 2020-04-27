<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2019, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2019, British Columbia Institute of Technology (https://bcit.ca/)
 * @license	https://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['email_must_be_array'] = 'روش اعتبار سنجی ایمیل باید یک آرایه منتقل شود.';
$lang['email_invalid_address'] = 'آدرس ایمیل نامعتبر:٪ s';
$lang['email_attachment_missing'] = 'یافتن پیوست ایمیل زیر امکان پذیر نیست:٪ s';
$lang['email_attachment_unreadable'] = 'باز کردن این پیوست امکان پذیر نیست:٪ s';
$lang['email_no_from'] = 'ارسال نامه بدون عنوان "از" امکان پذیر نیست.';
$lang['email_no_recipients'] = 'شما باید گیرندگان را نیز شامل شوید ، به ، سی سی یا سی سی سی';
$lang['email_send_failure_phpmail'] = 'ارسال ایمیل با استفاده از نامه PHP () امکان پذیر نیست. ممکن است سرور شما برای ارسال نامه با استفاده از این روش تنظیم نشده باشد.';
$lang['email_send_failure_sendmail'] = 'Unable to send email using PHP Sendmail. Your server might not be configured to send mail using this method.';
$lang['email_send_failure_smtp'] = 'Unable to send email using PHP SMTP. Your server might not be configured to send mail using this method.';
$lang['email_sent'] = 'Your message has been successfully sent using the following protocol: %s';
$lang['email_no_socket'] = 'Unable to open a socket to Sendmail. Please check settings.';
$lang['email_no_hostname'] = 'You did not specify a SMTP hostname.';
$lang['email_smtp_error'] = 'The following SMTP error was encountered: %s';
$lang['email_no_smtp_unpw'] = 'Error: You must assign a SMTP username and password.';
$lang['email_failed_smtp_login'] = 'Failed to send AUTH LOGIN command. Error: %s';
$lang['email_smtp_auth_un'] = 'Failed to authenticate username. Error: %s';
$lang['email_smtp_auth_pw'] = 'Failed to authenticate password. Error: %s';
$lang['email_smtp_data_failure'] = 'Unable to send data: %s';
$lang['email_exit_status'] = 'Exit status code: %s';
