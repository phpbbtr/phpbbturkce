<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACTION'			=> 'Eylem',
	'ACTION_NOTE'			=> 'Eylemn/Not',
	'ADD_FEEDBACK'			=> 'Geri bildirim ekle',
	'ADD_FEEDBACK_EXPLAIN'		=> 'If you would like to add a report on this please fill out the following form. Only use plain text; HTML, BBCode, etc. are not permitted.',
	'ADD_WARNING'			=> 'Uyarı ekle',
	'ADD_WARNING_EXPLAIN'		=> 'To send a warning to this user please fill out the following form. Only use plain text; HTML, BBCode, etc. are not permitted.',
	'ALL_ENTRIES'			=> 'Tüm girdiler',
	'ALL_NOTES_DELETED'		=> 'Successfully removed all user notes.',
	'ALL_REPORTS'			=> 'Tüm raporlar',
	'ALREADY_REPORTED'		=> 'This post has already been reported.',
	'ALREADY_REPORTED_PM'		=> 'This private message has already been reported.',
	'ALREADY_WARNED'		=> 'A warning has already been issued for this post.',
	'APPROVE'			=> 'Onayla',
	'APPROVE_POST'			=> 'Mesajı onayla',
	'APPROVE_POST_CONFIRM'		=> 'Are you sure you want to approve this post?',
	'APPROVE_POSTS'			=> 'Mesajları onayla',
	'APPROVE_POSTS_CONFIRM'		=> 'Are you sure you want to approve the selected posts?',
	'APPROVE_TOPIC'			=> 'Konuyu onayla',
	'APPROVE_TOPIC_CONFIRM'		=> 'Are you sure you want to approve this topic?',
	'APPROVE_TOPICS'		=> 'Konuları onayla',
	'APPROVE_TOPICS_CONFIRM'	=> 'Are you sure you want to approve the selected topics?',

	'CANNOT_MOVE_SAME_FORUM'	=> 'You cannot move a topic to the forum it’s already in.',
	'CANNOT_WARN_ANONYMOUS'		=> 'You cannot warn unregistered guest users.',
	'CANNOT_WARN_SELF'		=> 'You cannot warn yourself.',
	'CAN_LEAVE_BLANK'		=> 'This can be left blank.',
	'CHANGE_POSTER'			=> 'Change poster',
	'CLOSE_PM_REPORT'		=> 'ÖM raporunu kapat',
	'CLOSE_PM_REPORT_CONFIRM'	=> 'Are you sure you want to close the selected PM report?',
	'CLOSE_PM_REPORTS'		=> 'ÖM raporlarını kapat',
	'CLOSE_PM_REPORTS_CONFIRM'	=> 'Are you sure you want to close the selected PM reports?',
	'CLOSE_REPORT'			=> 'Raporu kapat',
	'CLOSE_REPORT_CONFIRM'		=> 'Are you sure you want to close the selected report?',
	'CLOSE_REPORTS'			=> 'Raporları kapat',
	'CLOSE_REPORTS_CONFIRM'		=> 'Are you sure you want to close the selected reports?',

	'DELETE_PM_REPORT'		=> 'ÖM raporunu sil',
	'DELETE_PM_REPORT_CONFIRM'	=> 'Are you sure you want to delete the selected PM report?',
	'DELETE_PM_REPORTS'		=> 'ÖM raporlarını sil',
	'DELETE_PM_REPORTS_CONFIRM'	=> 'Are you sure you want to delete the selected PM reports?',
	'DELETE_POSTS'			=> 'Mesajları sil',
	'DELETE_REPORT'			=> 'Raporu sil',
	'DELETE_REPORT_CONFIRM'		=> 'Are you sure you want to delete the selected report?',
	'DELETE_REPORTS'		=> 'Raporları sil',
	'DELETE_REPORTS_CONFIRM'	=> 'Are you sure you want to delete the selected reports?',
	'DELETE_SHADOW_TOPIC'		=> 'Gölge konu sil',
	'DELETE_TOPICS'			=> 'Seçili konuları sil',
	'DISAPPROVE'			=> 'Reddet',
	'DISAPPROVE_REASON'		=> 'Reason for disapproval',
	'DISAPPROVE_POST'		=> 'Mesajı reddet',
	'DISAPPROVE_POST_CONFIRM'	=> 'Are you sure you want to disapprove this post?',
	'DISAPPROVE_POSTS'		=> 'Mesajları reddet',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'Are you sure you want to disapprove the selected posts?',
	'DISPLAY_LOG'			=> 'Display entries from previous',
	'DISPLAY_OPTIONS'		=> 'Display options',

	'EMPTY_REPORT'			=> 'You must enter a description when selecting this reason.',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'Please note that one or several topics have been removed from the database because they were or become empty.',

	'FEEDBACK'			=> 'Geri bildirim',
	'FORK'				=> 'Kopyala',
	'FORK_TOPIC'			=> 'Konuyu kopyala',
	'FORK_TOPIC_CONFIRM'		=> 'Bu konuyu kopyalamak istediğinize emin misiniz?',
	'FORK_TOPICS'			=> 'Seçili konuları kopyala',
	'FORK_TOPICS_CONFIRM'		=> 'Seçili konuları kopyalamak istediğinize emin misiniz?',
	'FORUM_DESC'			=> 'Açıklama',
	'FORUM_NAME'			=> 'Forum adı',
	'FORUM_NOT_EXIST'		=> 'The forum you selected does not exist.',
	'FORUM_NOT_POSTABLE'		=> 'The forum you selected cannot be posted to.',
	'FORUM_STATUS'			=> 'Forum status',
	'FORUM_STYLE'			=> 'Forum stili',

	'GLOBAL_ANNOUNCEMENT'		=> 'Genel duyuru',

	'IP_INFO'			=> 'IP address information',
	'IPS_POSTED_FROM'		=> 'IP addresses this user has posted from',

	'LATEST_LOGS'			=> 'Son 5 eylem girdisi',
	'LATEST_REPORTED'		=> 'Son 5 rapor',
	'LATEST_REPORTED_PMS'		=> 'Son 5 ÖM raporu',
	'LATEST_UNAPPROVED'		=> 'Son 5 onay için bekleyen mesaj',
	'LATEST_WARNING_TIME'		=> 'Latest warning issued',
	'LATEST_WARNINGS'		=> 'Son 5 uyarı',
	'LEAVE_SHADOW'			=> 'Leave shadow topic in place',
	'LIST_REPORTS'			=> array(
		1	=> '%d rapor',
		2	=> '%d rapor',
	),
	'LOCK'				=> 'Kilitle',
	'LOCK_POST_POST'		=> 'Mesajı kilitle',
	'LOCK_POST_POST_CONFIRM'	=> 'Are you sure you want to prevent editing this post?',
	'LOCK_POST_POSTS'		=> 'Seçili mesajları kilitle',
	'LOCK_POST_POSTS_CONFIRM'	=> 'Are you sure you want to prevent editing the selected posts?',
	'LOCK_TOPIC_CONFIRM'		=> 'Are you sure you want to lock this topic?',
	'LOCK_TOPICS'			=> 'Seçili konuları kilitle',
	'LOCK_TOPICS_CONFIRM'		=> 'Are you sure you want to lock all selected topics?',
	'LOGS_CURRENT_TOPIC'		=> 'Currently viewing logs of:',
	'LOGIN_EXPLAIN_MCP'		=> 'To moderate this forum you must login.',
	'LOGVIEW_VIEWPOST'		=> 'Mesajı gör',
	'LOGVIEW_VIEWTOPIC'		=> 'Konuyu gör',
	'LOGVIEW_VIEWLOGS'		=> 'View topic log',
	'LOGVIEW_VIEWFORUM'		=> 'Forumu gör',
	'LOOKUP_ALL'			=> 'Look up all IPs',
	'LOOKUP_IP'			=> 'Look up IP',

	'MARKED_NOTES_DELETED'		=> 'Successfully removed all marked user notes.',

	'MCP_ADD'			=> 'Bir uyarı ekle',

	'MCP_BAN'			=> 'Banning',
	'MCP_BAN_EMAILS'		=> 'Ban emails',
	'MCP_BAN_IPS'			=> 'Ban IPs',
	'MCP_BAN_USERNAMES'		=> 'Ban Usernames',

	'MCP_LOGS'			=> 'Moderatör kayıtları',
	'MCP_LOGS_FRONT'		=> 'Ön sayfa',
	'MCP_LOGS_FORUM_VIEW'		=> 'Forum kayıtları',
	'MCP_LOGS_TOPIC_VIEW'		=> 'Konu kayıtları',

	'MCP_MAIN'			=> 'Main',
	'MCP_MAIN_FORUM_VIEW'		=> 'View forum',
	'MCP_MAIN_FRONT'		=> 'Ön sayfa',
	'MCP_MAIN_POST_DETAILS'		=> 'Mesaj ayrıntıları',
	'MCP_MAIN_TOPIC_VIEW'		=> 'Konuyu gör',
	'MCP_MAKE_ANNOUNCEMENT'		=> 'Modify to “Announcement”',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'Are you sure you want to change this topic to an “Announcement”?',
	'MCP_MAKE_ANNOUNCEMENTS'	=> 'Modify to “Announcements”',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> 'Are you sure you want to change the selected topics to “Announcements”?',
	'MCP_MAKE_GLOBAL'		=> 'Modify to “Global announcement”',
	'MCP_MAKE_GLOBAL_CONFIRM'	=> 'Are you sure you want to change this topic to a “Global announcement”?',
	'MCP_MAKE_GLOBALS'		=> 'Modify to “Global announcements”',
	'MCP_MAKE_GLOBALS_CONFIRM'	=> 'Are you sure you want to change the selected topics to “Global announcements”?',
	'MCP_MAKE_STICKY'		=> 'Modify to “Sticky”',
	'MCP_MAKE_STICKY_CONFIRM'	=> 'Are you sure you want to change this topic to a “Sticky”?',
	'MCP_MAKE_STICKIES'		=> 'Modify to “Stickies”',
	'MCP_MAKE_STICKIES_CONFIRM'	=> 'Are you sure you want to change the selected topics to “Stickies”?',
	'MCP_MAKE_NORMAL'		=> 'Modify to “Standard Topic”',
	'MCP_MAKE_NORMAL_CONFIRM'	=> 'Are you sure you want to change this topic to a “Standard Topic”?',
	'MCP_MAKE_NORMALS'		=> 'Modify to “Standard Topics”',
	'MCP_MAKE_NORMALS_CONFIRM'	=> 'Are you sure you want to change the selected topics to “Standard Topics”?',

	'MCP_NOTES'			=> 'Kullanıcı notları',
	'MCP_NOTES_FRONT'		=> 'Ön sayfa',
	'MCP_NOTES_USER'		=> 'Kullanıcı ayrıntıları',

	'MCP_POST_REPORTS'		=> 'Reports issued on this post',

	'MCP_PM_REPORTS'		=> 'Raporlanmış ÖMler',
	'MCP_PM_REPORT_DETAILS'		=> 'ÖM rapor ayrıntıları',
	'MCP_PM_REPORTS_CLOSED'		=> 'Kapalı ÖM raporları',
	'MCP_PM_REPORTS_CLOSED_EXPLAIN'	=> 'This is a list of all reports about private messages which have previously been resolved.',
	'MCP_PM_REPORTS_OPEN'		=> 'Açık ÖM raporları',
	'MCP_PM_REPORTS_OPEN_EXPLAIN'	=> 'This is a list of all reported private messages which are still to be handled.',

	'MCP_REPORTS'			=> 'Raporlar',
	'MCP_REPORT_DETAILS'		=> 'Rapor ayrıntıları',
	'MCP_REPORTS_CLOSED'		=> 'Kapalı raporlar',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'This is a list of all reports about posts which have previously been resolved.',
	'MCP_REPORTS_OPEN'		=> 'Açık raporlar',
	'MCP_REPORTS_OPEN_EXPLAIN'	=> 'This is a list of all reported posts which are still to be handled.',

	'MCP_QUEUE'				=> 'Moderation queue',
	'MCP_QUEUE_APPROVE_DETAILS'		=> 'Approve details',
	'MCP_QUEUE_UNAPPROVED_POSTS'		=> 'Posts awaiting approval',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'This is a list of all posts which require approving before they will be visible to users.',
	'MCP_QUEUE_UNAPPROVED_TOPICS'		=> 'Topics awaiting approval',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'This is a list of all topics which require approving before they will be visible to users.',
	'MCP_QUEUE_DELETED_POSTS'		=> 'Deleted posts',
	'MCP_QUEUE_DELETED_POSTS_EXPLAIN'	=> 'This is a list of all soft deleted posts. You can restore or permanently delete the posts from this screen.',
	'MCP_QUEUE_DELETED_TOPICS'		=> 'Deleted topics',
	'MCP_QUEUE_DELETED_TOPICS_EXPLAIN'	=> 'This is a list of all soft deleted topics. You can restore or permanently delete the topics from this screen.',

	'MCP_VIEW_USER'			=> 'View warnings for a specific user',

	'MCP_WARN'			=> 'Uyarılar',
	'MCP_WARN_FRONT'		=> 'Ön sayfa',
	'MCP_WARN_LIST'			=> 'Uyarı listesi',
	'MCP_WARN_POST'			=> 'Warn for specific post',
	'MCP_WARN_USER'			=> 'Warn user',

	'MERGE_POSTS_CONFIRM'	=> 'Are you sure you want to move the selected posts?',
	'MERGE_TOPIC_EXPLAIN'	=> 'Using the form below you can move selected posts into another topic. The posts will be split from this topic and merged into the other topic. These posts will not be reordered and will appear as if the users posted them to the new topic.<br />Please enter the destination topic id or click on “Select topic” to search for one.',
	'MERGE_TOPIC_ID'	=> 'Destination topic identification number',
	'MERGE_TOPICS'		=> 'Merge topics',
	'MERGE_TOPICS_CONFIRM'	=> 'Are you sure you want to merge the selected topics?',
	'MODERATE_FORUM'	=> 'Moderate forum',
	'MODERATE_TOPIC'	=> 'Moderate topic',
	'MODERATE_POST'		=> 'Moderate post',
	'MOD_OPTIONS'		=> 'Moderator options',
	'MORE_INFO'		=> 'Further information',
	'MOST_WARNINGS'		=> 'Users with most warnings',
	'MOVE_TOPIC_CONFIRM'	=> 'Are you sure you want to move the topic into a new forum?',
	'MOVE_TOPICS'		=> 'Move selected topics',
	'MOVE_TOPICS_CONFIRM'	=> 'Are you sure you want to move the selected topics into a new forum?',

	'NOTIFY_POSTER_APPROVAL'	=> 'Notify poster about approval?',
	'NOTIFY_POSTER_DISAPPROVAL'	=> 'Notify poster about disapproval?',
	'NOTIFY_USER_WARN'		=> 'Notify user about warning?',
	'NOT_MODERATOR'			=> 'You are not a moderator of this forum.',
	'NO_DESTINATION_FORUM'		=> 'Please select a forum for destination.',
	'NO_DESTINATION_FORUM_FOUND'	=> 'There is no destination forum available.',
	'NO_ENTRIES'			=> 'No log entries.',
	'NO_FEEDBACK'			=> 'No feedback exists for this user.',
	'NO_FINAL_TOPIC_SELECTED'	=> 'You have to select a destination topic for merging posts.',
	'NO_MATCHES_FOUND'		=> 'No matches found.',
	'NO_POST'			=> 'You have to select a post in order to warn the user for a post.',
	'NO_POST_REPORT'		=> 'This post was not reported.',
	'NO_POST_SELECTED'		=> 'You must select at least one post to perform this action.',
	'NO_POSTS_DELETED'		=> 'There are no deleted posts.',
	'NO_POSTS_QUEUE'		=> 'There are no posts waiting for approval.',
	'NO_REASON_DISAPPROVAL'		=> 'Please give an appropriate reason for disapproval.',
	'NO_REPORT'			=> 'No report found',
	'NO_REPORTS'			=> 'No reports found',
	'NO_REPORT_SELECTED'		=> 'You must select at least one report to perform this action.',
	'NO_TOPIC_ICON'			=> 'None',
	'NO_TOPIC_SELECTED'		=> 'You must select at least one topic to perform this action.',
	'NO_TOPICS_DELETED'		=> 'There are no deleted topics.',
	'NO_TOPICS_QUEUE'		=> 'There are no topics waiting for approval.',

	'ONLY_TOPIC'			=> 'Only topic “%s”',
	'OTHER_USERS'			=> 'Other users posting from this IP',

	'QUICKMOD_ACTION_NOT_ALLOWED'	=> "%s not allowed as quickmod",

	'PM_REPORT_CLOSED_SUCCESS'	=> 'The selected PM report has been closed successfully.',
	'PM_REPORT_DELETED_SUCCESS'	=> 'The selected PM report has been deleted successfully.',
	'PM_REPORTED_SUCCESS'		=> 'This private message has been successfully reported.',
	'PM_REPORTS_CLOSED_SUCCESS'	=> 'The selected PM reports have been closed successfully.',
	'PM_REPORTS_DELETED_SUCCESS'	=> 'The selected PM reports have been deleted successfully.',
	'PM_REPORTS_TOTAL'		=> array(
		0	=> 'There are no PM reports to review.',
		1	=> 'In total there is <strong>1</strong> PM report to review.',
		2	=> 'In total there are <strong>%d</strong> PM reports to review.',
	),
	'PM_REPORT_DETAILS'		=> 'Özel mesaj rapor ayrıntıları',
	'POSTER'			=> 'Poster',
	'POSTS_APPROVED_SUCCESS'	=> 'Seçili mesajlar onaylandı.',
	'POSTS_DELETED_SUCCESS'		=> 'The selected posts have been successfully removed from the database.',
	'POSTS_DISAPPROVED_SUCCESS'	=> 'The selected posts have been disapproved.',
	'POSTS_LOCKED_SUCCESS'		=> 'The selected posts have been locked successfully.',
	'POSTS_MERGED_SUCCESS'		=> 'The selected posts have been merged.',
	'POSTS_PER_PAGE'		=> 'Sayfa başına mesajlar',
	'POSTS_PER_PAGE_EXPLAIN'	=> '(Set to 0 to view all posts.)',
	'POSTS_RESTORED_SUCCESS'	=> 'The selected posts have been restored successfully.',
	'POSTS_UNLOCKED_SUCCESS'	=> 'The selected posts have been unlocked successfully.',
	'POST_APPROVED_SUCCESS'		=> 'The selected post has been approved.',
	'POST_DELETED_SUCCESS'		=> 'The selected post has been successfully removed from the database.',
	'POST_DISAPPROVED_SUCCESS'	=> 'The selected post has been disapproved.',
	'POST_LOCKED_SUCCESS'		=> 'Mesaj başarıyla kilitlendi.',
	'POST_NOT_EXIST'		=> 'The post you requested does not exist.',
	'POST_REPORTED_SUCCESS'		=> 'This post has been successfully reported.',
	'POST_RESTORED_SUCCESS'		=> 'This post has been restored successfully.',
	'POST_UNLOCKED_SUCCESS'		=> 'Post unlocked successfully.',

	'READ_USERNOTES'		=> 'Kullanıcı notları',
	'READ_WARNINGS'			=> 'Kullanıcı uyarıları',
	'REPORTER'			=> 'Reporter',
	'REPORTED'			=> 'Reported',
	'REPORTED_BY'			=> 'Reported by',
	'REPORTED_ON_DATE'		=> 'on',
	'REPORTS_CLOSED_SUCCESS'	=> 'The selected reports have been closed successfully.',
	'REPORTS_DELETED_SUCCESS'	=> 'The selected reports have been deleted successfully.',
	'REPORTS_TOTAL'			=> array(
		0	=> 'There are no reports to review.',
		1	=> 'In total there is <strong>1</strong> report to review.',
		2	=> 'In total there are <strong>%d</strong> reports to review.',
	),
	'REPORT_CLOSED'			=> 'This report has already been closed.',
	'REPORT_CLOSED_SUCCESS'		=> 'The selected report has been closed successfully.',
	'REPORT_DELETED_SUCCESS'	=> 'The selected report has been deleted successfully.',
	'REPORT_DETAILS'		=> 'Report details',
	'REPORT_MESSAGE'		=> 'Report this message',
	'REPORT_MESSAGE_EXPLAIN'	=> 'Use this form to report the selected private message. Reporting should generally be used only if the message breaks forum rules. <strong>Reporting a private message will make its contents visible to all moderators.</strong>',
	'REPORT_NOTIFY'			=> 'Notify me',
	'REPORT_NOTIFY_EXPLAIN'		=> 'Informs you when your report is dealt with.',
	'REPORT_POST_EXPLAIN'		=> 'Use this form to report the selected post to the forum moderators and board administrators. Reporting should generally be used only if the post breaks forum rules.',
	'REPORT_REASON'			=> 'Report reason',
	'REPORT_TIME'			=> 'Report time',
	'RESTORE'			=> 'Restore',
	'RESTORE_POST'			=> 'Restore post',
	'RESTORE_POST_CONFIRM'		=> 'Are you sure you want to restore this post?',
	'RESTORE_POSTS'			=> 'Restore posts',
	'RESTORE_POSTS_CONFIRM'		=> 'Are you sure you want to restore the selected posts?',
	'RESTORE_TOPIC'			=> 'Restore topic',
	'RESTORE_TOPIC_CONFIRM'		=> 'Are you sure you want to restore this topic?',
	'RESTORE_TOPICS'		=> 'Restore topics',
	'RESTORE_TOPICS_CONFIRM'	=> 'Are you sure you want to restore the selected topics?',
	'RESYNC'			=> 'Resync',
	'RETURN_MESSAGE'		=> '%sReturn to the message%s',
	'RETURN_NEW_FORUM'		=> '%sGo to the new forum%s',
	'RETURN_NEW_TOPIC'		=> '%sGo to the new topic%s',
	'RETURN_PM'			=> '%sReturn to the private message%s',
	'RETURN_POST'			=> '%sReturn to the post%s',
	'RETURN_QUEUE'			=> '%sReturn to the queue%s',
	'RETURN_REPORTS'		=> '%sReturn to the reports%s',
	'RETURN_TOPIC_SIMPLE'		=> '%sReturn to the topic%s',

	'SEARCH_POSTS_BY_USER'			=> 'Search posts by',
	'SELECT_ACTION'				=> 'Select desired action',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'Please select the forum you wish this global announcement to be displayed.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'One or more of the selected topics are global announcements. Please select the forum you wish these to be displayed.',
	'SELECT_MERGE'				=> 'Select for merge',
	'SELECT_TOPICS_FROM'			=> 'Select topics from',
	'SELECT_TOPIC'				=> 'Select topic',
	'SELECT_USER'				=> 'Select user',
	'SORT_ACTION'				=> 'Log action',
	'SORT_DATE'				=> 'Date',
	'SORT_IP'				=> 'IP address',
	'SORT_WARNINGS'				=> 'Warnings',
	'SPLIT_AFTER'				=> 'Split topic from selected post onwards',
	'SPLIT_FORUM'				=> 'Forum for new topic',
	'SPLIT_POSTS'				=> 'Split selected posts',
	'SPLIT_SUBJECT'				=> 'New topic title',
	'SPLIT_TOPIC_ALL'			=> 'Split topic from selected posts',
	'SPLIT_TOPIC_ALL_CONFIRM'		=> 'Are you sure you want to split this topic?',
	'SPLIT_TOPIC_BEYOND'			=> 'Split topic at selected post',
	'SPLIT_TOPIC_BEYOND_CONFIRM'		=> 'Are you sure you want to split this topic at the selected post?',
	'SPLIT_TOPIC_EXPLAIN'			=> 'Using the form below you can split a topic in two, either by selecting the posts individually or by splitting at a selected post.',

	'THIS_PM_IP'			=> 'Bu özel mesajın IP adresi',
	'THIS_POST_IP'			=> 'Bu mesajın IP adresi',
	'TOPICS_APPROVED_SUCCESS'	=> 'The selected topics have been approved.',
	'TOPICS_DELETED_SUCCESS'	=> 'The selected topics have been successfully removed from the database.',
	'TOPICS_DISAPPROVED_SUCCESS'	=> 'The selected topics have been disapproved.',
	'TOPICS_FORKED_SUCCESS'		=> 'The selected topics have been copied successfully.',
	'TOPICS_LOCKED_SUCCESS'		=> 'The selected topics have been locked.',
	'TOPICS_MOVED_SUCCESS'		=> 'The selected topics have been moved successfully.',
	'TOPICS_RESTORED_SUCCESS'	=> 'The selected topics have been restored successfully.',
	'TOPICS_RESYNC_SUCCESS'		=> 'The selected topics have been resynchronised.',
	'TOPICS_TYPE_CHANGED'		=> 'Topic types changed successfully.',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'The selected topics have been unlocked.',
	'TOPIC_APPROVED_SUCCESS'	=> 'The selected topic has been approved.',
	'TOPIC_DELETED_SUCCESS'		=> 'The selected topic has been successfully removed from the database.',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'The selected topic has been disapproved.',
	'TOPIC_FORKED_SUCCESS'		=> 'The selected topic has been copied successfully.',
	'TOPIC_LOCKED_SUCCESS'		=> 'The selected topic has been locked.',
	'TOPIC_MOVED_SUCCESS'		=> 'The selected topic has been moved successfully.',
	'TOPIC_NOT_EXIST'		=> 'The topic you selected does not exist.',
	'TOPIC_RESTORED_SUCCESS'	=> 'The selected topic has been restored successfully.',
	'TOPIC_RESYNC_SUCCESS'		=> 'The selected topic has been resynchronised.',
	'TOPIC_SPLIT_SUCCESS'		=> 'The selected topic has been split successfully.',
	'TOPIC_TIME'			=> 'Topic time',
	'TOPIC_TYPE_CHANGED'		=> 'Topic type changed successfully.',
	'TOPIC_UNLOCKED_SUCCESS'	=> 'The selected topic has been unlocked.',
	'TOTAL_WARNINGS'		=> 'Total Warnings',

	'UNAPPROVED_POSTS_TOTAL'	=> array(
		0	=> 'There are no posts waiting for approval.',
		1	=> 'In total there is <strong>1</strong> post waiting for approval.',
		2	=> 'In total there are <strong>%d</strong> posts waiting for approval.',
	),
	'UNLOCK'			=> 'Kilidi aç',
	'UNLOCK_POST'			=> 'Mesaj kilidini aç',
	'UNLOCK_POST_EXPLAIN'		=> 'Düzenlemeye izin ver',
	'UNLOCK_POST_POST'		=> 'Mesaj kilidini aç',
	'UNLOCK_POST_POST_CONFIRM'	=> 'Bu mesaja düzenleme izni vermek istediğinize emin misiniz?',
	'UNLOCK_POST_POSTS'		=> 'Seçili mesajların kilidini aç',
	'UNLOCK_POST_POSTS_CONFIRM'	=> 'Seçili mesajlara düzenleme izni vermek istediğinize emin misiniz?',
	'UNLOCK_TOPIC'			=> 'Konu kilidini aç',
	'UNLOCK_TOPIC_CONFIRM'		=> 'Bu konunun kilidini açmak istediğinzie emin misiniz?',
	'UNLOCK_TOPICS'			=> 'Seçili konuların kilidini aç',
	'UNLOCK_TOPICS_CONFIRM'		=> 'Seçili konuların kilidini açmak istediğinize emin misiniz?',
	'USER_CANNOT_POST'		=> 'You cannot post in this forum.',
	'USER_CANNOT_REPORT'		=> 'You cannot report posts in this forum.',
	'USER_FEEDBACK_ADDED'		=> 'Kullanıcı geri bildirimi başarıyla eklendi.',
	'USER_WARNING_ADDED'		=> 'Kullanıcı başarıyla uyarıldı.',

	'VIEW_DETAILS'			=> 'Ayrıntıları gör',
	'VIEW_PM'			=> 'Özel mesajı gör',
	'VIEW_POST'			=> 'Mesajı gör',

	'WARNED_USERS'			=> 'Uyarılmış kullanıcılar',
	'WARNED_USERS_EXPLAIN'		=> 'This is a list of users with unexpired warnings issued to them.',
	'WARNING_PM_BODY'		=> 'The following is a warning which has been issued to you by an administrator or moderator of this site.[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'		=> 'Board warning issued',
	'WARNING_POST_DEFAULT'		=> 'This is a warning regarding the following post made by you: %s .',
	'NO_WARNINGS'			=> 'Herhangi bir uyarı yok.',

	'YOU_SELECTED_TOPIC'		=> 'You selected topic number %d: %s.',

	'report_reasons'		=> array(
		'TITLE'		=> array(
			'WAREZ'		=> 'Warez',
			'SPAM'		=> 'Spam',
			'OFF_TOPIC'	=> 'Konu dışı',
			'OTHER'		=> 'Diğer',
		),
		'DESCRIPTION'	=> array(
			'WAREZ'		=> 'Mesaj yasa dışı veya korsan yazılımlara bağlantılar içeriyor.',
			'SPAM'		=> 'Bildirilen mesajın tek amacı, bir web sitesi veya başka bir ürünün reklamını yapmaktır.',
			'OFF_TOPIC'	=> 'Bildirilen mesaj konu dışı.',
			'OTHER'		=> 'The reported message does not fit into any other category, please use the further information field.',
		),
	),
));
