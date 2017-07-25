/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     7/24/2017 10:50:53 PM                        */
/*==============================================================*/


drop table if exists CART;

drop table if exists CATEGORY;

drop table if exists PRICE;

drop table if exists PRODUCT;

drop table if exists UNIT;

drop table if exists USER;

/*==============================================================*/
/* Table: CART                                                  */
/*==============================================================*/
create table CART
(
   PRODUCT_ID           int not null,
   USER_ID              int not null,
   QUANTITY             int,
   primary key (PRODUCT_ID, USER_ID)
);

/*==============================================================*/
/* Table: CATEGORY                                              */
/*==============================================================*/
create table CATEGORY
(
   CATEGORY_ID          int not null auto_increment,
   CATEGORY_NAME        varchar(200) not null,
   primary key (CATEGORY_ID)
);

/*==============================================================*/
/* Table: PRICE                                                 */
/*==============================================================*/
create table PRICE
(
   PRICE_ID             int not null auto_increment,
   PRICE_UNIT           decimal,
   primary key (PRICE_ID)
);

/*==============================================================*/
/* Table: PRODUCT                                               */
/*==============================================================*/
create table PRODUCT
(
   PRODUCT_ID           int not null auto_increment,
   UNIT_ID              int,
   PRICE_ID             int,
   CATEGORY_ID          int,
   PRODUCT_NAME         varchar(200) not null,
   PRODUCT_IMAGE        varchar(200),
   primary key (PRODUCT_ID)
);

/*==============================================================*/
/* Table: UNIT                                                  */
/*==============================================================*/
create table UNIT
(
   UNIT_ID              int not null auto_increment,
   UNIT_NAME            varchar(200),
   primary key (UNIT_ID)
);

/*==============================================================*/
/* Table: USER                                                  */
/*==============================================================*/
create table USER
(
   USER_ID              int not null auto_increment,
   USER_NAME            varchar(200),
   USER_PASSWORD        varchar(200),
   primary key (USER_ID)
);

alter table CART add constraint FK_CART foreign key (PRODUCT_ID)
      references PRODUCT (PRODUCT_ID) on delete restrict on update restrict;

alter table CART add constraint FK_CART2 foreign key (USER_ID)
      references USER (USER_ID) on delete restrict on update restrict;

alter table PRODUCT add constraint FK_CATEGORY foreign key (CATEGORY_ID)
      references CATEGORY (CATEGORY_ID) on delete restrict on update restrict;

alter table PRODUCT add constraint FK_PRICE foreign key (PRICE_ID)
      references PRICE (PRICE_ID) on delete restrict on update restrict;

alter table PRODUCT add constraint FK_UNIT foreign key (UNIT_ID)
      references UNIT (UNIT_ID) on delete restrict on update restrict;

