<?php
namespace Qimnet\SolrClientTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Qimnet\SolrClientBundle\Annotation as Solr;
/**
 * @ORM\Table()
 * @ORM\Entity()
 */
class TestBatchUpdate {
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
     * @var boolean $needs_index
     * 
     * @ORM\Column(type="boolean")
     * @Solr\NeedsIndex
     * @var type 
     */
    protected $needs_index=false;
    
    /**
     * @Solr\Indexable(id=true, solr_name="id")
     */
    public function getSolrId()
    {
        return 'bu/' . $this->getId();
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
     * @return TestBatchUpdate
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

    /**
     * Set needs_index
     *
     * @param boolean $needsIndex
     * @return TestBatchUpdate
     */
    public function setNeedsIndex($needsIndex)
    {
        $this->needs_index = $needsIndex;
    
        return $this;
    }

    /**
     * Get needs_index
     *
     * @return boolean 
     */
    public function getNeedsIndex()
    {
        return $this->needs_index;
    }
}