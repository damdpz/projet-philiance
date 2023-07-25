<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Categories
 *
 * @ORM\Table(name="categories")
 * @ORM\Entity
 */
class Categories
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;

    public function setNom($nom) {
        $this->nom = $nom;
    }

    /**
     * @var int|null
     *
     * @ORM\Column(name="parent_id", type="integer", nullable=true)
     */
    private $parentId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="showcase_img", type="string", length=255, nullable=true, options={"default"="assets/img/carroussel/home.jpg"})
     */
    private $showcaseImg = 'assets/img/carroussel/home.jpg';
    public function setShowcaseImg($showcaseImg) {
        $this->showcaseImg = $showcaseImg;
    }

}
