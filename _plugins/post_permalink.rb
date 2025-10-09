# frozen_string_literal: true

require "jekyll/utils"

Jekyll::Hooks.register :posts, :pre_render do |post|
  publication_date = post.data["date"] || post.date
  next unless publication_date.respond_to?(:year)
  next unless publication_date.year >= 2025
  next if post.data["permalink"]

  slug = post.data["slug"].to_s
  slug = Jekyll::Utils.slugify(post.data["title"]) if slug.strip.empty? && post.data["title"]
  slug = post.basename_without_ext if slug.to_s.strip.empty?

  post.data["permalink"] = "/jeff/#{slug}/"
end
