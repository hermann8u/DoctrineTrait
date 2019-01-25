# Doctrine Trait

A set of useful trait to compose Doctrine entities. At the moment the package include following traits:
- **LocalizableEntity** : Localization of an entity based on its coordinate.
- **SlugableEntity** : Add a name and a slug property to an entity and compute the slug based on the name with lifecycle callbacks.
- **TimestampableEntity** : Add a createdAt and updatedAt property and update them with lifecycle callbacks.

## Warning

The following traits need to add lifecycle callbacks to the hosting entity:
- SlugableEntity
- TimestampableEntity