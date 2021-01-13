CREATE DATABASE mycms;

CREATE TABLE mycms.tb_blog_post (
    id 		INTEGER AUTO_INCREMENT PRIMARY KEY		,
    title 	VARCHAR(512) NOT NULL				, 
    content TEXT NOT NULL					,
    preview_content VARCHAR(1024)
);

INSERT INTO mycms.tb_blog_post(title, content, preview_content)
VALUES('Political crysis', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore', ' Duis aute irure dolor in reprehenderit in voluptate velit...');

INSERT INTO mycms.tb_blog_post(title, content, preview_content)
VALUES('Daily forecast', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium ...');

INSERT INTO mycms.tb_blog_post(title, content, preview_content)
VALUES('IT News', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore', 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit...');

INSERT INTO mycms.tb_blog_post(title, content, preview_content)
VALUES('Elections results', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore', 'Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam...');

INSERT INTO mycms.tb_blog_post(title, content, preview_content)
VALUES('PHP 7 news', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore', 'Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur...');

INSERT INTO mycms.tb_blog_post(title, content, preview_content)
VALUES('CSS 3 news', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor...');

INSERT INTO mycms.tb_blog_post(title, content, preview_content)
VALUES('Weekly forecast', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...');

INSERT INTO mycms.tb_blog_post(title, content, preview_content)
VALUES('Monthly forecast', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia...');

INSERT INTO mycms.tb_blog_post(title, content, preview_content)
VALUES('Vikings new season', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium...');

INSERT INTO mycms.tb_blog_post(title, content, preview_content)
VALUES('Ballers release date', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore', 'Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam...');

INSERT INTO mycms.tb_blog_post(title, content, preview_content)
VALUES('Spartacus new season', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...');