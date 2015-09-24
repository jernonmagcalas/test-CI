set -ev
if [ $TRAVIS_PULL_REQUEST = false ] && (exit 0;)
if[ $(TRAVIS_BRANCH) = 'staging' ] && (exit 0;)

git config --global user.email = 'jernonmagcalas@gmail.com'
git config --global user.name = 'jernon magcalas'

git remote add repoo https://$token@github.com/$TRAVIS_REPO_SLUG.git
git fetch repoo
git stash
git checkout repoo/staging
git merge $TRAVIS_COMMIT
git push repoo HEAD:staging
exit 0;