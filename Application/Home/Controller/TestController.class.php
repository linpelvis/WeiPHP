<?php
		ALTER TABLE `wp_auth_group_access` MODIFY COLUMN `uid` int(10) COMMENT '用户id' ;
		ALTER TABLE `wp_card_member` MODIFY COLUMN `uid` int(10) COMMENT '用户UID' ;
		ALTER TABLE `wp_document` MODIFY COLUMN `uid` int(10) DEFAULT 0 COMMENT '用户ID' ;
		ALTER TABLE `wp_exam_answer` MODIFY COLUMN `uid` int(10) COMMENT '用户UID' ;
		ALTER TABLE `wp_forms_value` MODIFY COLUMN `uid` int(10) COMMENT '用户ID' ;
		ALTER TABLE `wp_forum` MODIFY COLUMN `uid` int(10) DEFAULT 0 COMMENT '用户ID' ;
		ALTER TABLE `wp_member` MODIFY COLUMN `uid` int(10) COMMENT '用户ID' ;
		ALTER TABLE `wp_member_public` MODIFY COLUMN `uid` int(10) COMMENT '用户ID' ;
		ALTER TABLE `wp_member_public_link` MODIFY COLUMN `uid` int(10) COMMENT '管理员UID' ;
		ALTER TABLE `wp_store` MODIFY COLUMN `uid` int(10) DEFAULT 0 COMMENT '用户ID' ;
		ALTER TABLE `wp_suggestions` MODIFY COLUMN `uid` int(10) DEFAULT 0 COMMENT '用户ID' ;
		ALTER TABLE `wp_survey_answer` MODIFY COLUMN `uid` int(10) COMMENT '用户UID' ;
		ALTER TABLE `wp_test_answer` MODIFY COLUMN `uid` int(10) COMMENT '用户UID' ;
		ALTER TABLE `wp_userdata` MODIFY COLUMN `uid` int(10) COMMENT '用户id' ;
		ALTER TABLE `wp_xydzp_log` MODIFY COLUMN `uid` int(10) DEFAULT 0 COMMENT '用户id' ;";