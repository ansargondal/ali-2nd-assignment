CREATE table users (
  id       int          NOT null PRIMARY KEY AUTO_INCREMENT,
  username varchar(70)  not null UNIQUE,
  email    varchar(150) not null,
  password varchar(255) not null
);


CREATE table posts (
  id          int          NOT null PRIMARY KEY AUTO_INCREMENT,
  user_id     int          not null,
  title       varchar(150) not null,
  post_date   datetime     not null,
  in_reply_to int          null,
  body        varchar(150),

  constraint user_post_fk foreign key (user_id) references users (id)
    on delete cascade,
  constraint post_reply_fk foreign key (in_reply_to) references posts (id)
    on delete set null

);
CREATE table follow (
  user_id     int not null,
  follower_id int null

  #   constraint user_follow_fk foreign key (user_id, follower_id) references users (id, id)
  #     on delete cascade
);
