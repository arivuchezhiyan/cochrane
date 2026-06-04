<?php 
require_once 'user-admin/secure/db_connect.php';

$sql = "SELECT p.*, c.category_name 
        FROM posts p 
        LEFT JOIN category c ON p.category_id = c.category_id 
        WHERE p.post_status = 'published' 
        ORDER BY p.created_at DESC";
$result = $conn->query($sql);

include 'includes/header.php'; 
?>

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h3>Blog</h3>
                    <div class="thm-breadcrumb__inner">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="index.php">Home</a></li>
                            <li><span class="fas fa-angle-right"></span></li>
                            <li>Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Blog Page Start-->
        <section class="blog-one blog-page">
            <div class="blog-one__shape-2"></div>
            <div class="blog-one__shape-3"></div>
            <div class="container">
                <div class="row">
<?php 
    if ($result && $result->num_rows > 0): 
        $delay = 100;
        while($blog = $result->fetch_assoc()): 
    ?>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="<?php echo $delay; ?>ms">
                <div class="blog-one__single">
                    <div class="blog-one__img">
                        <img src="<?php echo htmlspecialchars(!empty($blog['image_path']) ? $blog['image_path'] : 'assets/images/home/blog1.png'); ?>" alt="">
                    </div>
                    <div class="blog-one__content">
                        <div class="blog-one__shape-1">
                            <img src="assets/images/shapes/blog-one-shape-1.png" alt="">
                        </div>
                        <div class="blog-one__content-inner">
                            <ul class="blog-one__meta list-unstyled">
                                <li>
                                    <a href="blog-details.php?id=<?php echo $blog['post_id']; ?>">
                                        <span class="fas fa-comments"></span>By Admin
                                    </a>
                                </li>
                                <li>
                                    <a href="blog-details.php?id=<?php echo $blog['post_id']; ?>">
                                        <span class="fas fa-calendar-alt"></span><?php echo date('d M, Y', strtotime($blog['created_at'])); ?>
                                    </a>
                                </li>
                            </ul>
                            <h3 class="blog-one__title"><a href="blog-details.php?id=<?php echo $blog['post_id']; ?>"><?php echo htmlspecialchars($blog['post_title']); ?></a></h3>
                            <div class="blog-one__btn">
                                <a href="blog-details.php?id=<?php echo $blog['post_id']; ?>" class="thm-btn">
                                    <span class="fas fa-arrow-right"></span>
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <?php 
            $delay += 100;
        endwhile; 
    else: 
    ?>
        <div class="col-12 text-center">
            <p>No blog posts found.</p>
        </div>
    <?php endif; ?>
</div>
            </div>
        </section>
        <!--Blog Page End-->

<?php include 'includes/footer.php'; ?>
