<?php
    namespace Model;

        /**
         * Class PageRepository
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
            $sql = "SELECT
                      slug,
                      title,
                      span_class,
                      id,
                      img
                    FROM
                     `page`";
            $stmt = $this->PDO->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(\PDO::FETCH_OBJ);
        }

        /**
         * @param array $data
         * @return bool
         */
        public function modifier($data)
        {
            $sql = "
                UPDATE
                page
                SET
                slug = :slug,
                h1 = :h1,
                body = :body,
                title = :title,
                img = :img,
                span_text = :span_text,
                span_class = :span_class
                WHERE
                id = :id";
            $stmt = $this->PDO->prepare($sql);
            $stmt->bindParam(':id', $data['id']);
            $stmt->bindParam(':slug', $data['slug']);
            $stmt->bindParam(':h1', $data['h1']);
            $stmt->bindParam(':body', $data['body']);
            $stmt->bindParam(':title', $data['title']);
            $stmt->bindParam(':img', $data['img']);
            $stmt->bindParam(':span_text', $data['span_text']);
            $stmt->bindParam(':span_class', $data['span_class']);
            $stmt->execute();
        }

        /**
         * @param int $id
         * @return bool
         */
        public function supprimer($id)
        {
            $sql = "
                  DELETE FROM
                  page
                  WHERE
                  id = :id";
            $stmt = $this->PDO->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return true;
        }

        /**
         * @param array $data
         * @return int
         */
        public function inserer(array $data)
        {
            $sql = "
                INSERT INTO
                page
                (`slug`,
                 `h1`,
                 `body`,
                 `title`,
                 `img`,
                 `span_text`,
                 `span_class`)
                VALUES
                (:slug,
                 :h1,
                 :body,
                 :title,
                 :img,
                 :span_text,
                 :span_class)";

            $stmt = $this->PDO->prepare($sql);
            $stmt->bindParam(':slug', $data['slug']);
            $stmt->bindParam(':h1', $data['h1']);
            $stmt->bindParam(':body', $data['body']);
            $stmt->bindParam(':title', $data['title']);
            $stmt->bindParam(':img', $data['img']);
            $stmt->bindParam(':span_text', $data['span_text']);
            $stmt->bindParam(':span_class', $data['span_class']);
            $stmt->execute();
        }

        /**
         * @param $slug
         * @return bool
         */
        public function getBySlug($slug)
        {
            $sql = "
                  SELECT
                  `body`,
                  `title`,
                  `img`,
                  `span_class`
                  FROM
                  `page`
                  WHERE
                  `slug` = :slug";

            $stmt = $this->PDO->prepare($sql);
            $stmt->bindParam(':slug', $slug, \PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetchObject();
        }

        public function getAllSlugs()
        {
            $sql = "
                  SELECT
                  `slug`
                  FROM
                  `page`";

            $stmt = $this->PDO->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(\PDO::FETCH_OBJ);
        }

        public function detailAction($id)
        {
            $sql = "
                  SELECT
                  `id`,
                  `slug`,
                  `h1`,
                  `body`,
                  `title`,
                  `img`,
                  `span_class`,
                  `span_text`
                  FROM
                  page
                  WHERE
                  id = :id";
            $stmt = $this->PDO->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return $stmt->fetchObject();
        }
    }