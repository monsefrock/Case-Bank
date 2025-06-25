-- Migration script to add `state` column to existing `users` table
ALTER TABLE `users` ADD COLUMN `state` TINYINT NOT NULL DEFAULT 1 AFTER `type`;
