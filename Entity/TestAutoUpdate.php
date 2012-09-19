<?php
namespace Qimnet\SolrClientTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Qimnet\SolrClientBundle\Annotation as Solr;
/**
 * Doctrine entity used to test automatic 
 * @ORM\Table()
 * @ORM\Entity()
 */
class TestAutoUpdate {
    /**
     * @var int $id 
     * 
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @var string $content
     *
     * @ORM\Column(type="text")
     * @Solr\Indexable
     */
    protected $content;
    
    /**
     * @Solr\Indexable(id=true, solr_name="id")
     */
    public function getSolrId()
    {
        return 'au/' . $this->getId();
    }
    /**
     * @Solr\Indexable(solr_name="tag")
     */
    public function getTags()
    {
        return array("tag1", 'tag2');
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return TestAutoUpdate
     */
    public function setContent($content)
    {
        $this->content = $content;
    
        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

}