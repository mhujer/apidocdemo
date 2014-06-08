### `GET` /gists ###

_List the authenticated user’s gists or if called anonymously, this will return all public gists:_

List the authenticated user’s gists or if called anonymously, this will return all public gists:

#### Parameters ####

since:

  * type: string
  * required: false
  * description: A timestamp in ISO 8601 format: YYYY-MM-DDTHH:MM:SSZ. Only gists updated at or after this time are returned.


### `POST` /gists ###

_Create a gist_

#### Requirements ####

**files**

  - Type: hash
  - Description: The keys in the files hash are the string filename, and the value is another hash with a key of content, and a value of the file contents.

#### Parameters ####

description:

  * type: string
  * required: false
  * description: A description of the gist.

public:

  * type: boolean
  * required: false
  * description: Indicates whether the gist is public. Default: false


### `GET` /gists/{id} ###

_Get a single gist_

Get a single gist

#### Requirements ####

**id**



### `DELETE` /gists/{id} ###

_Delete a gist_

Delete a gist

#### Requirements ####

**id**



### `GET` /gists/{id}/commits ###

_List gist commits_

List gist commits

#### Requirements ####

**id**
