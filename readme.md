# Folder structure


Another way to manage folder structure. This is boilerplate.


Each module would be in the root directory of the Modules folder. For example

- Modules\Leads...

- Modules\Measures...

We could also store them as git submodules and pull them in easily, allowing individuals to work on a module-based assignment.



You would simply register each modules' service providers, and then all their handlers, routes and config files would be in their respective directory. Then if we ever need to access a feature from another module we could either:

- `use Modules\Leads...`
- `event('access-leads-record')` then listen for the event back.


Just food-for-thought, and a little boilerplate with the idea.