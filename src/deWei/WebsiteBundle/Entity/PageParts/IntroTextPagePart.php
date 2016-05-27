<?php

namespace deWei\WebsiteBundle\Entity\PageParts;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * IntroTextPagePart
 *
 * @ORM\Table(name="dewei_websitebundle_intro_text_page_parts")
 * @ORM\Entity
 */
class IntroTextPagePart extends AbstractPagePart
{
    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=false)
     * @Assert\NotBlank()
     */
    private $content;

    /**
     * @param string $content
     *
     * @return IntroTextPagePart
     */
    public function setContent($content)
    {
	$this->content = $content;

	return $this;
    }

    /**
     * @return string
     */
    public function getContent()
    {
	return $this->content;
    }

    /**
     * Get the twig view.
     *
     * @return string
     */
    public function getDefaultView()
    {
	return 'deWeiWebsiteBundle:PageParts:IntroTextPagePart/view.html.twig';
    }

    /**
     * Get the admin form type.
     *
     * @return \deWei\WebsiteBundle\Form\PageParts\IntroTextPagePartAdminType
     */
    public function getDefaultAdminType()
    {
	return new \deWei\WebsiteBundle\Form\PageParts\IntroTextPagePartAdminType();
    }
}
