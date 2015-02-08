
SELECT CONCAT('   <url>\n      <loc>http://www.dot-art.co.uk/artist/', REPLACE(name, ' ', '-'), '</loc>\n      <lastmod>2011-05-07</lastmod>\n      <priority>0.9</priority>\n      <changefreq>weekly</changefreq>\n   </url>')
  FROM artist
 WHERE display = 1;