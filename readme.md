# Folder structure


Another way to manage folder structure. This is boilerplate.


Eachother module would be in the root directory. For example

- Modules\Leads...

- Modules\Measures...


All their handlers, routes and config files would be in their respective directory. Then if we ever need to access a feature from another module we could either:

- `use Modules\Leads...`
- `event('access-leads-record')` then listen for the event back.


Just food-for-thought, and a little boilerplate with the idea.