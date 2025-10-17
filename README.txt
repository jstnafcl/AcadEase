
ACADDD - Reorganized project (PHP-ready)

Structure:
/index.php                - formerly index.html (converted to PHP)
/includes/header.php      - common header (global head + nav placeholder)
/includes/footer.php      - common footer
/pages/*.php              - page files converted from HTML
/pages/dashboard/*.php    - student dashboard pages (with PHP placeholders)
/assets/css/*.css         - all CSS files moved here
/assets/js/*.js           - JS scripts moved here
/assets/images/*.*        - images moved here
/config/db_connect.php    - placeholder for DB connection (PDO example)

Notes / Next steps:
- Replace placeholders in /config/db_connect.php with your database credentials.
- Include the DB connect file in pages where needed: <?php include __DIR__ . '/../config/db_connect.php'; ?>
- Replace hardcoded placeholders in dashboard pages with real DB queries.
- Consider refactoring common <head> content into includes/header.php and using include() in pages.

