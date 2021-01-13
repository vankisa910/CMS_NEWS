CREATE TABLE mycms.tm_categories(
    id INTEGER AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(4000) NOT NULL
);
SELECT * FROM mycms.tm_categories;

INSERT INTO mycms.tm_categories(title) VALUES('Weather');
INSERT INTO mycms.tm_categories(title) VALUES('Politics');
INSERT INTO mycms.tm_categories(title) VALUES('IT');
INSERT INTO mycms.tm_categories(title) VALUES('Cinema');


CREATE TABLE mycms.tb_blog_post__categories(
    blog_post_id INTEGER,
    category_id INTEGER,
    PRIMARY KEY(blog_post_id, category_id)
);


INSERT INTO mycms.tb_blog_post__categories(blog_post_id, category_id) VALUES(1, 2);
INSERT INTO mycms.tb_blog_post__categories(blog_post_id, category_id) VALUES(2, 1);
INSERT INTO mycms.tb_blog_post__categories(blog_post_id, category_id) VALUES(3, 3);
INSERT INTO mycms.tb_blog_post__categories(blog_post_id, category_id) VALUES(4, 2);
INSERT INTO mycms.tb_blog_post__categories(blog_post_id, category_id) VALUES(5, 3);
INSERT INTO mycms.tb_blog_post__categories(blog_post_id, category_id) VALUES(6, 3);
INSERT INTO mycms.tb_blog_post__categories(blog_post_id, category_id) VALUES(7, 1);
INSERT INTO mycms.tb_blog_post__categories(blog_post_id, category_id) VALUES(8, 1);
INSERT INTO mycms.tb_blog_post__categories(blog_post_id, category_id) VALUES(9, 4);
INSERT INTO mycms.tb_blog_post__categories(blog_post_id, category_id) VALUES(10, 4);
INSERT INTO mycms.tb_blog_post__categories(blog_post_id, category_id) VALUES(11, 4);


select * from mycms.tb_blog_post__categories;


-- SELECT * FROM tb_blog_post a,
-- 			  tb_blog_post__categories b
--               WHERE a.id = b.blog_post_id AND 
-- 					b.category_id = 