
select a.id, count(1)
  from art a
  join art_pricing p on a.`id` = p.`art`
 group by a.id
 having count(1) > 1;

-- Non-complex products:
select a.id as art_id,
       a.title,
       a.media, 
       a.width,
       a.height,
       case
         when greatest(a.height, a.width) between  0 and 20 then '0cm - 20cm'
         when greatest(a.height, a.width) between 21 and 30 then '21cm - 30cm'
         when greatest(a.height, a.width) between 31 and 40 then '31cm - 40cm'
         when greatest(a.height, a.width) between 41 and 50 then '41cm - 50cm'
         when greatest(a.height, a.width) between 51 and 60 then '51cm - 60cm'
         when greatest(a.height, a.width) between 61 and 75 then '61cm - 75cm'
         when greatest(a.height, a.width) between 76 and 100 then '76cm - 100cm'
         when greatest(a.height, a.width) between 101 and 125 then '101cm - 125cm'
         when greatest(a.height, a.width) between 126 and 150 then '126cm - 150cm'
         else '150cm +'
       end as size_band,
       a.image,
       a.pricing_info,
       p.`price`,
       p.`description`,
       p.`item_number`,
       case
         when description LIKE 'limited%' then 'Limited Edition Print'
         when description = 'photographic print' then 'Limited Edition Print'
         when description = 'original' then 'Original'
         when description = 'framed original' then 'Framed Original'
         else description
       end as format,
       a.main_image,
       t.`name`
  from art a
  join artist t on a.`artist` = t.`id`
  join art_pricing p on a.`id` = p.`art`
 where a.id NOT IN (
   select art_id
     from complex_products
 )

insert into complex_products (art_id, complex_type)
select x.id, 1
  from (
select a.id, count(1)
  from art a
  join art_pricing p on a.`id` = p.`art`
 group by a.id
 having count(1) > 1) x;

insert into complex_products (art_id, complex_type)
select a.id, 2
  from 
(select a.title,
       t.id,
       count(1)
  from art a
  join artist t on a.`artist` = t.`id`
 group by a.title, id
 having count(1) > 1) x
   join art a on a.`title` = x.title and a.`artist` = x.id;
