
if [ $TRAVIS_PULL_REQUEST = false ]; then
    exit 0;
fi

if[ $(TRAVIS_BRANCH) = 'staging' ] && (exit 0;)

git config --global user.email = 'jernonmagcalas@gmail.com'
git config --global user.name = 'jernon magcalas'

echo "$TRAVIS_REPO_SLUG"
git remote add repoo https://$username:$password@github.com/$TRAVIS_REPO_SLUG.git
git fetch repoo
git stash
git checkout repoo/staging
git merge $TRAVIS_COMMIT
git push repoo staging