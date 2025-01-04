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
 * Any specific branch of medical science or practice. Medical specialities include clinical specialties that pertain to particular organ systems and their respective disease states, as well as allied health specialties. Enumerated type.
 * @experimental This enum is considered experimental and may change at any time until it is declared stable.
 */
enum MedicalSpecialty implements EnumerationInterface
{
    /**
     * A specific branch of medical science that pertains to study of anesthetics and their application.
     */
    case Anesthesia;

    /**
     * A specific branch of medical science that pertains to diagnosis and treatment of disorders of heart and vasculature.
     */
    case Cardiovascular;

    /**
     * A field of public health focusing on improving health characteristics of a defined population in relation with their geographical or environment areas.
     */
    case CommunityHealth;

    /**
     * A branch of medicine that is involved in the dental care.
     */
    case Dentistry;

    /**
     * A specific branch of medical science that pertains to diagnosis and treatment of disorders of skin.
     */
    case Dermatology;

    /**
     * Dietetics and nutrition as a medical specialty.
     */
    case DietNutrition;

    /**
     * A specific branch of medical science that deals with the evaluation and initial treatment of medical conditions caused by trauma or sudden illness.
     */
    case Emergency;

    /**
     * A specific branch of medical science that pertains to diagnosis and treatment of disorders of endocrine glands and their secretions.
     */
    case Endocrine;

    /**
     * A specific branch of medical science that pertains to diagnosis and treatment of disorders of digestive system.
     */
    case Gastroenterologic;

    /**
     * A specific branch of medical science that pertains to hereditary transmission and the variation of inherited characteristics and disorders.
     */
    case Genetic;

    /**
     * A specific branch of medical science that is concerned with the diagnosis and treatment of diseases, debilities and provision of care to the aged.
     */
    case Geriatric;

    /**
     * A specific branch of medical science that pertains to the health care of women, particularly in the diagnosis and treatment of disorders affecting the female reproductive system.
     */
    case Gynecologic;

    /**
     * A specific branch of medical science that pertains to diagnosis and treatment of disorders of blood and blood producing organs.
     */
    case Hematologic;

    /**
     * Something in medical science that pertains to infectious diseases, i.e. caused by bacterial, viral, fungal or parasitic infections.
     */
    case Infectious;

    /**
     * A medical science pertaining to chemical, hematological, immunologic, microscopic, or bacteriological diagnostic analyses or research.
     */
    case LaboratoryScience;

    /**
     * A nurse-like health profession that deals with pregnancy, childbirth, and the postpartum period (including care of the newborn), besides sexual and reproductive health of women throughout their lives.
     */
    case Midwifery;

    /**
     * A specific branch of medical science that pertains to diagnosis and treatment of disorders of muscles, ligaments and skeletal system.
     */
    case Musculoskeletal;

    /**
     * A specific branch of medical science that studies the nerves and nervous system and its respective disease states.
     */
    case Neurologic;

    /**
     * A health profession of a person formally educated and trained in the care of the sick or infirm person.
     */
    case Nursing;

    /**
     * A specific branch of medical science that specializes in the care of women during the prenatal and postnatal care and with the delivery of the child.
     */
    case Obstetric;

    /**
     * A specific branch of medical science that deals with benign and malignant tumors, including the study of their development, diagnosis, treatment and prevention.
     */
    case Oncologic;

    /**
     * The science or practice of testing visual acuity and prescribing corrective lenses.
     */
    case Optometric;

    /**
     * A specific branch of medical science that is concerned with the ear, nose and throat and their respective disease states.
     */
    case Otolaryngologic;

    /**
     * A specific branch of medical science that is concerned with the study of the cause, origin and nature of a disease state, including its consequences as a result of manifestation of the disease. In clinical care, the term is used to designate a branch of medicine using laboratory tests to diagnose and determine the prognostic significance of illness.
     */
    case Pathology;

    /**
     * A specific branch of medical science that specializes in the care of infants, children and adolescents.
     */
    case Pediatric;

    /**
     * The practice or art and science of preparing and dispensing drugs and medicines.
     */
    case PharmacySpecialty;

    /**
     * The practice of treatment of disease, injury, or deformity by physical methods such as massage, heat treatment, and exercise rather than by drugs or surgery.
     */
    case Physiotherapy;

    /**
     * A specific branch of medical science that pertains to therapeutic or cosmetic repair or re-formation of missing, injured or malformed tissues or body parts by manual and instrumental means.
     */
    case PlasticSurgery;

    /**
     * Podiatry is the care of the human foot, especially the diagnosis and treatment of foot disorders.
     */
    case Podiatric;

    /**
     * The medical care by a physician, or other health-care professional, who is the patient's first contact with the health-care system and who may recommend a specialist if necessary.
     */
    case PrimaryCare;

    /**
     * A specific branch of medical science that is concerned with the study, treatment, and prevention of mental illness, using both medical and psychological therapies.
     */
    case Psychiatric;

    /**
     * Branch of medicine that pertains to the health services to improve and protect community health, especially epidemiology, sanitation, immunization, and preventive medicine.
     */
    case PublicHealth;

    /**
     * A specific branch of medical science that pertains to the study of the respiratory system and its respective disease states.
     */
    case Pulmonary;

    /**
     * A specific branch of medical science that pertains to the study of the kidneys and its respective disease states.
     */
    case Renal;

    /**
     * The therapy that is concerned with the maintenance or improvement of respiratory function (as in patients with pulmonary disease).
     */
    case RespiratoryTherapy;

    /**
     * A specific branch of medical science that deals with the study and treatment of rheumatic, autoimmune or joint diseases.
     */
    case Rheumatologic;

    /**
     * The scientific study and treatment of defects, disorders, and malfunctions of speech and voice, as stuttering, lisping, or lalling, and of language disturbances, as aphasia or delayed language acquisition.
     */
    case SpeechPathology;

    /**
     * A specific branch of medical science that pertains to treating diseases, injuries and deformities by manual and instrumental means.
     */
    case Surgical;

    /**
     * A specific branch of medical science that is concerned with poisons, their nature, effects and detection and involved in the treatment of poisoning.
     */
    case Toxicologic;

    /**
     * A specific branch of medical science that is concerned with the diagnosis and treatment of diseases pertaining to the urinary tract and the urogenital system.
     */
    case Urologic;

    public function canonical(): string
    {
        return 'https://schema.org/' . $this->name;
    }
}
