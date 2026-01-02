create table users (
    id int primary key AUTO_INCREMENT,
    first_name varchar(50) not null,
    last_name varchar(50) not null,
    email varchar(50) not null UNIQUE,
    phone_number varchar(30) not null,
    password varchar(255) not null,
    role ENUM('reader','author','admin') DEFAULT 'reader' not null,
    created_date DATETIME DEFAULT CURRENT_TIMESTAMP
);

create table category (
    id int primary key AUTO_INCREMENT,
    name varchar(50) not null,
    admin_id int not null,
    FOREIGN KEY (admin_id) REFERENCES users(id)
);

create table articles (
    id int primary key AUTO_INCREMENT,
    title varchar(250) not null,
    author_id int not null,
    body TEXT not null,
    created_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN key (author_id) REFERENCES users(id)
);



create table articles_categories(
    id int primary key AUTO_INCREMENT,
    article_id int not null,
    category_id int not null,
    FOREIGN key (article_id) REFERENCES articles(id),
    FOREIGN KEY (category_id) REFERENCES category(id)
) ;

create table comments (
    id int primary key AUTO_INCREMENT,
    user_id int not null,
    created_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    body varchar(500) not null,
    article_id int not null,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (article_id) REFERENCES articles(id)

) ;

create table article_report (
    id int primary key AUTO_INCREMENT,
    user_id int not null,
    article_id int not null,
    body varchar(500),
    reason ENUM('Spam or misleading','Harassment or hate speech','Inappropriate content','Other') not null
    created_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (article_id) REFERENCES articles(id) 
);

create table comment_report (
    id int primary key AUTO_INCREMENT,
    user_id int not null,
    comment_id int not null,
    body varchar(500),
    reason ENUM('Spam or misleading','Harassment or hate speech','Inappropriate content','Other') not null
    created_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (comment_id) REFERENCES comments(id)
) ;

create table article_likes (
    id int primary key AUTO_INCREMENT,
    user_id int not null,
    article_id int not null,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (article_id) REFERENCES articles(id),
    UNIQUE(user_id, article_id)
) ;

create table comment_likes (
    id int primary key AUTO_INCREMENT,
    user_id int not null,
    comment_id int not null,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (comment_id) REFERENCES comments(id),
    UNIQUE(user_id, comment_id)
);

