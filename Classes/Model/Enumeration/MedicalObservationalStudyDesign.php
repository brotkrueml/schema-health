<?php

declare(strict_types=1);

/*
 * This file is part of the "schema_health" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\SchemaHealth\Model\Enumeration;

use Brotkrueml\Schema\Core\Model\EnumerationInterface;

/**
 * Design models for observational medical studies. Enumerated type.
 * @experimental This enum is considered experimental and may change at any time until it is declared stable.
 */
enum MedicalObservationalStudyDesign implements EnumerationInterface
{
    /**
     * A case series (also known as a clinical series) is a medical research study that tracks patients with a known exposure given similar treatment or examines their medical records for exposure and outcome. A case series can be retrospective or prospective and usually involves a smaller number of patients than the more powerful case-control studies or randomized controlled trials. Case series may be consecutive or non-consecutive, depending on whether all cases presenting to the reporting authors over a period of time were included, or only a selection.
     */
    case CaseSeries;

    /**
     * Also known as a panel study. A cohort study is a form of longitudinal study used in medicine and social science. It is one type of study design and should be compared with a cross-sectional study.  A cohort is a group of people who share a common characteristic or experience within a defined period (e.g., are born, leave school, lose their job, are exposed to a drug or a vaccine, etc.). The comparison group may be the general population from which the cohort is drawn, or it may be another cohort of persons thought to have had little or no exposure to the substance under investigation, but otherwise similar. Alternatively, subgroups within the cohort may be compared with each other.
     */
    case CohortStudy;

    /**
     * Studies carried out on pre-existing data (usually from 'snapshot' surveys), such as that collected by the Census Bureau. Sometimes called Prevalence Studies.
     */
    case CrossSectional;

    /**
     * Unlike cross-sectional studies, longitudinal studies track the same people, and therefore the differences observed in those people are less likely to be the result of cultural differences across generations. Longitudinal studies are also used in medicine to uncover predictors of certain diseases.
     */
    case Longitudinal;

    /**
     * An observational study design.
     */
    case Observational;

    /**
     * A registry-based study design.
     */
    case Registry;

    public function canonical(): string
    {
        return 'https://schema.org/' . $this->name;
    }
}
