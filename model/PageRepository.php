<?php
namespace Model;

    /**
     * Class PageRepository
     * @author Yann Le Scouarnec <yann.le-scouarnec@hetic.net>
     * @package model
     */
/**
 * Class PageRepository
 * @package model
 */
class PageRepository
{
    /**
     * @var \PDO
     */
    private $PDO;

    /**
     * PageRepository constructor.
     * @param \PDO $PDO
     */
    public function __construct(\PDO $PDO)
    {
        $this->PDO = $PDO;
    }

    /**
     * @return array
     */
    public function lister()
    {
        $sql = "SELECT slug, title, id FROM `page`";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    /**
     * @param array $data
     * @return bool
     */
    public function modifier(array $data)
    {
        $sql = "UPDATE page SET slug = :slug, h1 = :h1, body = :body,
                title = :title, img = :img, span_text = :span_text,
                span_class = :span_class";
        $stmt = $this->PDO->prepare($sql);
        $stmt->bindParam(':slug', $data['slug']);
        $stmt->bindParam(':h1', $data['h1']);
        $stmt->bindParam(':body', $data['body']);
        $stmt->bindParam(':title', $data['title']);
        $stmt->bindParam(':img', $data['img']);
        $stmt->bindParam(':span_text', $data['span_text']);
        $stmt->bindParam(':span_class', $data['span_class']);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    /**
     * @param int $id
     * @return bool
     */
    public function supprimer($id)
    {
        return true;
    }

    /**
     * @param array $data
     * @return int
     */
    public function inserer(array $data)
    {
        return 1;
    }

    /**
     * @param $slug
     * @return bool
     */
    public function getBySlug($slug)
    {
        $sql = "SELECT `body`, `title` FROM `page` WHERE `slug` = :slug";
        $stmt = $this->PDO->prepare($sql);
        $stmt->bindParam(':slug', $slug, \PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchObject();
    }

    public function getAllSlugs()
    {
        $sql = "SELECT `slug` FROM `page`";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }
}